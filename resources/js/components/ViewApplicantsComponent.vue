
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
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(applicant,index) in applicants" :key=applicant>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>{{applicant.IDno}}</h4>
                                </div>
                                <div class="card-body mb-3">
                                    <p class="card-text">Name:{{applicant.fullname}}</p>
                                    <p class="card-text">Address:{{applicant.address}}</p> 
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3">
                            <div class="card">
                                <div class="card-body mb-4">
                                    <div class="text-center mt-5 mb-4">
                                        <router-link v-bind:to="{name: 'NewApplicant',params:{name: this.orgName}}">
                                            <a href="#" class="btn btn-primary">Add Applicant</a>
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
                        name: "RegisterApplicants",
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "ManageOrg"
                    }

                ],
                orgID : "",
                orgName : ""
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
                axios.get('/getApplicant')
                    .then(response => {
                        this.applicants = response.data;
                });
            }
        }
    }

</script>
