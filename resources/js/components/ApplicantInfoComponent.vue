<template>
<sidebar-component v-bind:menues="_menues">
    <div class="py-4">
        <section>
            <div class="container-fluid" id="box">
                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        <h1>Record Aid Disbursement</h1>
                        <h3>Applicant Info</h3>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 order-md-1  mx-auto">
                        <div class="card shadow">
                            <div class="card-body mb-3">
                                <div class="row">
                                    <div class="col-lg-12 text-center mb-5" v-show="!loading">
                                        <h4>Organization: {{orgName}}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- loading spinner -->
                                    <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                        <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mb-3" v-show="!loading">
                                        <h4>IDno : {{IDno}}</h4>
                                        <h4>Fullname: {{fullname}}</h4>
                                        <h4>Address :<span style="font-size:20px;">{{address}}</span></h4>
                                    </div>
                                </div>
                                <div class="row text-center"  v-show="!loading">
                                    <div class="col-lg-12 mt-3 mb-3">
                                        <router-link v-bind:to="{name: 'viewDocuments'}">
                                            <button type="button" class="btn btn-outline-dark">View Documents</button>
                                        </router-link> 
                                    </div>  
                                </div> 
                                <div class="row text-center">
                                    <div class="col-lg-6 mt-3 mb-3"  v-show="!loading">
                                        <router-link v-bind:to="{name: 'addDisbursement'}">
                                            <button type="button" class="btn btn-outline-primary">Next</button>
                                        </router-link> 
                                    </div>  
                                    <div class="col-lg-6 mt-3 mb-3" v-show="!loading">
                                        <router-link v-bind:to="{name: 'selectApplicant'}">
                                            <button type="button" class="btn btn-outline-danger">Back</button>
                                        </router-link>  
                                    </div>  
                                </div> 

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</sidebar-component>

</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'

    export default {
        data: function() {
            return {
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
                fullname: "",
                address:"",
                householdIncome: "",
                loading: false
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },

        created() {
            this.orgID = Cookies.get('orgID');
            this.IDno = Cookies.get('IDno');
            axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {         
                    this.$router.push({
                        name: 'Home'
                    });

                }else if(response.data != 'admin'){
                    this.loading = true;
                    axios.post('/findOrganization',{'orgID':Cookies.get('orgID')})
                        .then(response => {
                            this.orgName = response.data[0]['orgName'];
                            Cookies.set('orgName',this.orgName);
                            this.loading = false;
                        });

                    axios.post('/findApplicant',{'IDno':Cookies.get('IDno')})
                        .then(response => {
                            this.fullname = response.data[0]['fullname'];
                            Cookies.set('fullname',this.fullname);
                            this.address = response.data[0]['address'];
                            this.householdIncome = response.data[0]['householdIncome'];
                            
                        });  
                }else {
                    
                     this.$router.push({
                        name: 'Admin'
                    });
                    
                }
            });


        },
        methods: {
            
        }
        
    }
</script>

<style>

</style>