
<template> 
    <sidebar-component v-bind:menues="_menues">
        
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Welcome {{this.orgName}}</h1>
                            <h5>{{this.fullname}} Email: {{this.email}}</h5>
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

    export default {
        data: function() {
            return {
                _menues: [
                    {
                        name: "Register Applicants",
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "viewApplicants"
                    }

                ],
                orgID: "",
                orgName: "",
                fullname: "",
                email: "",
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
                    
            });
        }
    }

</script>
