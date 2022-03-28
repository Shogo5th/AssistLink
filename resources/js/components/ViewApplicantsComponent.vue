
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Organization Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Applicants</h1>
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
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>ID: {{applicant.IDno}}</h4>
                                </div>
                                <div class="card-body mb-3">
                                    <p class="card-text">Name:{{applicant.fullname}}</p>
                                    <p class="card-text">Address:{{applicant.address}}</p> 
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-show="!loading">

                            <div class="card shadow">
                                <div class="card-body mb-4">
                                    <div class="text-center mt-3">
                                        <h4>Add Applicant</h4>
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
                                            <a href="#" class="mt-3 plus" style="font-size: 38px;"><i class="fa-solid fa-circle-plus"></i></a>
                                        </router-link>
                                    </div>
                                </div>
                            </div> 
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
                loading: false
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        created: function() {

            
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
                    }
            });

        
        },
        methods: {
            getApplicant() {
                this.loading = true;
                axios.get('/getApplicant')
                    .then(response => {
                        this.applicants = response.data;
                        this.loading = false;
                });
            }
        }
    }

</script>
