
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Organization Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Record Aid Disbursement</h1>
                            <h4 class="text-center">Documents</h4>
                            <h5 class="text-center">Full Name: {{fullname}}</h5>
                            <h5 class="text-center">IDno: {{IDno}}</h5>
                        </div>
                    </div>
                    <div class="row mb-5">
                        
                        <!-- loading spinner -->
                        <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                            <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(doc) in documents" :key=doc v-show="!loading">
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>ID:{{doc.documentID}}</h4>
                                </div>
                                <div class="card-body mb-3">
                                    <h5 class="card-title">Filie name: {{doc.filename}}</h5>
                                    <h5 class="card-text"> Description: </h5>
                                    <p>{{doc.description}}</p>
                                    <a v-bind:href="'/storage/' + doc.path"  class="btn btn-primary" 
                                    target="_blank" rel="noopener noreferrer">View Document</a>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="row text-center" v-show="!loading"> 
                        <div class="col-lg-12 mt-3 mb-3">
                            <router-link v-bind:to="{name: 'Applicantinfo'}">
                                <button type="button" class="btn btn-danger">Back</button>
                            </router-link>  
                        </div>  
                    </div> 
                </div>
            </section>
        </div>
        <!-- Organization Cards -->

    </sidebar-component>


</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'
    

    export default {
        data() {
            return {
                documents: [],
                _menues: [
                    {
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
                        link: "viewApplicants"
                    },
                    {
                        name: "Organize Aid Appeal",
                        short: "Appeal",
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
                        link: "organizeAidAppeal"
                    },
                    {
                        name: "Record Contribution",
                        short: "Contribution",
                        icon: "<i class='fa-regular fa-handshake'></i>",
                        link: "recordContribution"
                    },
                    {
                        name: "Record Disbursement",
                        short: "Disbursement",
                        icon: "<i class='fa-solid fa-hand-holding-heart'></i>",
                        link: "recordAidDisbursement"
                    }

                ],
                orgID: "",
                orgName: "",
                IDno: "",
                fullname:"",
                loading: false

            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        
        created() {
            this.orgID = Cookies.get('orgID');
            this.orgName = Cookies.get('orgName');
            this.IDno = Cookies.get('IDno');
            this.fullname = Cookies.get('fullname');

            axios.get('/loginCheck')
                .then(response => {

                    if(response.data == 'none') {
                            this.$router.push({
                            name: 'Home'
                        });
                    }else if(response.data != 'admin'){
                        this.loading = true;
                         axios.post('/getDocuments',{'IDno':Cookies.get('IDno')})
                        .then(response => {
                           this.documents = response.data;
                           this.loading = false;
                        });

                    }else {
                        this.$router.push({
                            name: 'admin'
                        });
                    }
            });
        },
        methods: {
        }
    }

</script>
