
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Apeal Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2 text-center">
                            <h1>Record Contribution</h1>
                            <h4>Organization: {{this.orgName}}</h4>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(appeal) in appeals" :key=appeal>
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-body mb-3">
                                    <h5 class="card-title">ID: {{appeal.appealID}}</h5>
                                    <h5 class="card-title">From: {{appeal.fromDate}}</h5>
                                    <h5 class="card-title">To: {{appeal.toDate}}</h5>
                                    <router-link v-bind:to="{name: 'NewContribution'}">
                                         <a href="#" class="btn btn-primary" v-on:click="setCookie(appeal.appealID,appeal.fromDate,appeal.toDate)">Record Contribution</a>
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

                ]
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        
        created() {
            // reset cookie
            Cookies.remove('appealID');
            Cookies.remove('fromDate');
            Cookies.remove('toDate');

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
                    }
            });

            axios.get('/getallappeal/currentAppeal')
                .then(response => {
                    this.appeals = response.data;
            });
        },
        methods: {
            setCookie(id,from,to) {
                Cookies.set('appealID', id);
                Cookies.set('fromDate', from);
                Cookies.set('toDate', to);
            }
        }
    }

</script>
