
<template> 
    <sidebar-component v-bind:menues="_menues">
        
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
<<<<<<< HEAD
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
=======
<<<<<<< HEAD
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
=======
<<<<<<< HEAD
<<<<<<< HEAD
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
=======
                            <h1 class="text-center">Welcome Organization User</h1>
                            <h4>Email:</h4>
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                            <h1 class="text-center">Welcome Organization User</h1>
                            <h4>Email:</h4>
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h5 class="text-center">Please Select Menu </h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </sidebar-component>


</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import axios from 'axios'
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
    
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
    
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d

    export default {
        data: function() {
            return {
                _menues: [
                    {
                        name: "Register Applicants",
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
                        link: "viewApplicants"
                    }

                ],
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
                orgID: "",
                orgName: "",
                fullname: "",
                email: "",
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                orgID: this.$route.params.orgID,
                orgName: ""
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
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
        created: function() {

            
            axios.get('/loginCheck')
                .then(response => {

                    if(response.data == 'none') {
                         this.$router.push({
                            name: 'Home', 
                        });
                    }else if(response.data == 'admin'){
                        this.$router.push({
                            name: 'Admin', 
                        });
                    }else {
                        this.orgName = response.data['orgName'];
                        this.orgID = response.data['orgID'];
                        this.fullname = response.data['fullname'];
                        this.email = response.data['email'];
                    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
        created() {
             axios.get('/findOrg',this.orgID)
                .then(response => {
                    this.orgName = response.data;
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
                    
            });
        }
    }

</script>
