
<template> 
    <sidebar-component v-bind:menues="_menues">
        
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
<<<<<<< HEAD
                        <div class="col-md-12 order-md-1  p-2 text-center">
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
=======
<<<<<<< HEAD
                        <div class="col-md-12 order-md-1  p-2 text-center">
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
=======
<<<<<<< HEAD
                        <div class="col-md-12 order-md-1  p-2 text-center">
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
=======
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
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

    import SidebarComponent from './BaseComponents/SidebarComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'
<<<<<<< HEAD
=======
=======
    import SidebarComponent from './BaseComponents/SidebarComponent'
<<<<<<< HEAD
    import Cookies from 'js-cookie';
    import axios from 'axios'
=======
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
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

    export default {
        data: function() {
            return {
                _menues: [
                    {
<<<<<<< HEAD
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
<<<<<<< HEAD
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
                        name: "Register Applicants",
<<<<<<< HEAD
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        link: "viewApplicants"
                    },
                    {
                        name: "Organize Aid Appeal",
                        short: "Appeal",
<<<<<<< HEAD
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
=======
<<<<<<< HEAD
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        link: "organizeAidAppeal"
                    },
                    {
                        name: "Record Contribution",
                        short: "Contribution",
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "recordContribution"
                    }

                ],
=======
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
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                orgID: "",
                orgName: "",
                fullname: "",
                email: "",
<<<<<<< HEAD
=======
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
                orgID: this.$route.params.orgID,
                orgName: ""
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
<<<<<<< HEAD
        created: function() {
            Cookies.remove('orgID');
=======
<<<<<<< HEAD
        created: function() {
            Cookies.remove('orgID');
=======
<<<<<<< HEAD
        created: function() {
            Cookies.remove('orgID');
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
        created: function() {

>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        Cookies.set('orgID',this.orgID);
                        this.fullname = response.data['fullname'];
                        this.email = response.data['email'];
                    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
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
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    
            });
        }
    }

</script>
