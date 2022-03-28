
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Organization Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
<<<<<<< HEAD
                            <h1 class="text-center">Record Aid Disbursement</h1>
                            <h4 class="text-center">Select Applicant</h4>
                            <h5 class="text-center">For Appeal ID: {{appealID}}</h5>
                        </div>
                    </div>
                    <div class="row mb-5">
                        
                        <!-- loading spinner -->
                        <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                            <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(applicant) in applicants" :key=applicant v-show="!loading">
=======
                            <h1 class="text-center">Select Applicant</h1>
                            <h4 class="text-center">OrgaName : {{orgName}}</h4>
                            <h4 class="text-center">For Appeal ID: {{appealID}}</h4>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(applicant) in applicants" :key=applicant>
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>ID: {{applicant.IDno}}</h4>
                                </div>
                                <div class="card-body mb-3">
                                    <p class="card-text">Name:{{applicant.fullname}}</p>
                                    <p class="card-text">Address:{{applicant.address}}</p> 
                                </div>

                                <div class="row mt-3 mb-3 text-center">
                                    <div class="col-12">
                                        <router-link v-bind:to="{name: 'Applicantinfo'}">
                                            <a href="#" class="btn btn-primary" v-on:click="setCookie(applicant.IDno)">View</a>
                                        </router-link>
                                    </div>
<<<<<<< HEAD
                                </div> 
                            </div> 
                        </div>
                    </div>
                    <div class="row text-center" v-show="!loading"> 
                        <div class="col-lg-12 mt-3 mb-3">
                            <router-link v-bind:to="{name: 'recordAidDisbursement'}">
                                <button type="button" class="btn btn-danger">Back</button>
                            </router-link>  
                        </div>  
                    </div>
=======
                                </div>
                            </div> 
                        </div>
                    </div>
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

           
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
                applicants: [],
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
                orgID : "",
                orgName : "",
<<<<<<< HEAD
                appealID: "",
                loading: false
=======
                appealID: ""
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        created: function() {
            Cookies.remove('IDno');
            Cookies.remove('fullname');
            this.appealID = Cookies.get('appealID');
            
            
            axios.get('/loginCheck')
                .then(response => {

                    if(response.data == 'none') {
                         this.$router.push({
                            name: 'Home'
                        });
                    }else if(response.data == 'admin'){
                        this.$router.push({
                            name: 'Admin'
                        });
                    }else {
                        this.orgName = response.data['orgName'];
                        this.orgID = response.data['orgID'];
                        this.getApplicant();
<<<<<<< HEAD
                       
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    }
            });

        
        },
        methods: {
            getApplicant() {
<<<<<<< HEAD
                this.loading = true;
                axios.get('/getApplicant')
                    .then(response => {
                        this.applicants = response.data;
                        this.loading = false;
=======
                axios.get('/getApplicant')
                    .then(response => {
                        this.applicants = response.data;
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                });
            },
            setCookie(IDno) {
                Cookies.set('IDno',IDno)
            }
        }
    }

</script>
