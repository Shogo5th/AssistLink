
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Apeal Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
<<<<<<< HEAD
                            <h1 class="text-center">Record Aid Disbursement</h1>
                            <h4 class="text-center">Select Appeal</h4>
                        </div>
                    </div>
                    <div class="row mb-5">
                        
                        <!-- loading spinner -->
                        <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                            <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(appeal) in appeals" :key=appeal v-show="!loading">
=======
                            <h1 class="text-center">Select Appeal</h1>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(appeal) in appeals" :key=appeal>
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-body mb-3">
                                    <h5>ID:{{appeal.appealID}}</h5>
                                    <h5>From:{{appeal.fromDate}}</h5>
                                    <h5>To:{{appeal.toDate}}</h5>
                                    <h5>Description:</h5>
                                    <p>{{appeal.description}}</p>
                                    <router-link v-bind:to="{name: 'selectApplicant'}">
                                         <a href="#" class="btn btn-primary" v-on:click="setCookies(appeal.appealID)">View Applicants</a>
                                    </router-link>


                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Appeal Cards -->

    </sidebar-component>


</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'
    

    export default {
        data() {
            return {
                appeals: [],
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
        
        created() {
            Cookies.remove('appealID')
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
<<<<<<< HEAD
                        this.loading = true;
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        this.orgName = response.data['orgName'];
                        this.orgID = response.data['orgID'];
                    }
            });

            axios.get('/getallappeal/currentAppeal')
                .then(response => {
                    this.appeals = response.data;
<<<<<<< HEAD
                    this.loading = false;
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            });
        },
        methods: {
            setCookies(id) {
                Cookies.set('appealID',id);
            }
        }
    }

</script>
