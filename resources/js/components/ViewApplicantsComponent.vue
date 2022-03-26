
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
<<<<<<< HEAD
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(applicant) in applicants" :key=applicant>
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>ID: {{applicant.IDno}}</h4>
=======
<<<<<<< HEAD
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(applicant) in applicants" :key=applicant>
=======
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(applicant,index) in applicants" :key=applicant>
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>{{applicant.IDno}}</h4>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                </div>
                                <div class="card-body mb-3">
                                    <p class="card-text">Name:{{applicant.fullname}}</p>
                                    <p class="card-text">Address:{{applicant.address}}</p> 
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3">
<<<<<<< HEAD
                            <div class="card shadow">
                                <div class="card-body mb-4">
                                    <div class="text-center mt-3">
                                        <h4>Add Applicant</h4>
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
                                            <a href="#" class="mt-3 plus" style="font-size: 38px;"><i class="fa-solid fa-circle-plus"></i></a>
=======
                            <div class="card">
                                <div class="card-body mb-4">
                                    <div class="text-center mt-5 mb-4">
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
=======
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
=======
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
=======
<<<<<<< HEAD
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
=======
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName, id: this.orgID}}">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName, id: this.orgID}}">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                                            <a href="#" class="btn btn-primary">Add Applicant</a>
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
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                    }

                ],
                orgID : "",
                orgName : ""
<<<<<<< HEAD
=======
=======
                        name: "RegisterApplicants",
<<<<<<< HEAD
                        short: "Applicant",
=======
<<<<<<< HEAD
                        short: "Applicant",
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        short: "Applicant",
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "ManageOrg"
                    }

                ],
<<<<<<< HEAD
                orgID : "",
                orgName : ""
=======
<<<<<<< HEAD
                orgID : "",
                orgName : ""
=======
<<<<<<< HEAD
<<<<<<< HEAD
                orgID : "",
                orgName : ""
=======
                orgID : "OR001",
                orgName : "Organization A"
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                orgID : "OR001",
                orgName : "Organization A"
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
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
                axios.get('/getApplicant')
                    .then(response => {
                        this.applicants = response.data;
                });
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
        
        created() {
                axios.get('/getApplicant',this.orgID)
                .then(response => {
                    this.applicants = response.data;
                    console.log(response.data)
                });
        },
        methods: {
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
        }
    }

</script>
