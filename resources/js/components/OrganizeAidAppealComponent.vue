
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Apeal Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Organize Aid Appeals</h1>
                        </div>
                    </div>
                    <div class="row mb-5">
<<<<<<< HEAD
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(appeal) in appeals" :key=appeal>
                            <div class="card mb-3 shadow" style="max-width: 540px;">
=======
<<<<<<< HEAD
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(appeal) in appeals" :key=appeal>
=======
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(appeal,index) in appeals" :key=appeals>
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                            <div class="card mb-3" style="max-width: 540px;">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                <div class="card-body mb-3">
                                    <h5 class="card-title">ID:{{appeal.appealID}}</h5>
                                    <h5 class="card-title">From:{{appeal.fromDate}}</h5>
                                    <h5 class="card-title">To:{{appeal.toDate}}</h5>
<<<<<<< HEAD
                                    <router-link v-bind:to="{name: 'viewMoreAppeal'}">
                                         <a href="#" class="btn btn-primary" v-on:click="setCookie(appeal.appealID)">View More</a>
=======
                                    <router-link v-bind:to="{name: 'NewOrgRep',params:{name: this.orgName, id: this.orgID}}">
                                         <a href="#" class="btn btn-primary">View More</a>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                    </router-link>


                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3">
<<<<<<< HEAD
                            <div class="card shadow">
                                <div class="card-body mb-4">
                                    <div class="text-center mt-3 ">
                                    <h4>Add a new Appeal</h4>
                                    <router-link v-bind:to="{name: 'NewAppeal'}">
                                        <a href="#" class="mt-3 plus" style="font-size: 38px;"><i class="fa-solid fa-circle-plus"></i></a>
=======
                            <div class="card">
                                <div class="card-body" mb-3>
                                    <div class="text-center mb-4">
                                    <h4>Add a new Appeal</h4>
                                    <router-link v-bind:to="{name: 'NewAppeal'}">
                                        <a href="#" class="btn btn-primary mt-5">Add a new Appeal</a>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                    </router-link>
                                    </div>
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
<<<<<<< HEAD
    import Cookies from 'js-cookie';
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
    import axios from 'axios'
    

    export default {
        data() {
            return {
                appeals: [],
                _menues: [
                    {
<<<<<<< HEAD
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
<<<<<<< HEAD
                        name: "Register Applicants",
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                        link: "viewApplicants"
                    },
                    {
                        name: "Organize Aid Appeal",
                        short: "Appeal",
<<<<<<< HEAD
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                        link: "organizeAidAppeal"
                    },
                    {
                        name: "Record Contribution",
                        short: "Contribution",
<<<<<<< HEAD
                        icon: "<i class='fa-regular fa-handshake'></i>",
                        link: "recordContribution"
                    },
                    {
                        name: "Record Disbursement",
                        short: "Disbursement",
                        icon: "<i class='fa-solid fa-hand-holding-heart'></i>",
                        link: "recordAidDisbursement"
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "recordContribution"
=======
                        name: "Manage Organization",
                        short: "Organization",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "ManageOrg"
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                    }

                ]
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        
        created() {

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

            axios.get('/getallappeal')
                .then(response => {
                    this.appeals = response.data;
            });
        },
        methods: {
<<<<<<< HEAD
            setCookie(id){
                Cookies.set('orgID',this.orgID)
                Cookies.set('orgName',this.orgName)
                Cookies.set('appealID',id)
            }
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
        }
    }

</script>
<<<<<<< HEAD

=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
