<template>
    <gototop-component></gototop-component>
    <main>
<<<<<<< HEAD
        <header-component v-bind:navFlag="false"></header-component>

         <!-- content -->
            <div class="py-4 bg-light" id="viewAllOrganizations">
=======
        <header-component></header-component>

         <!-- content -->
<<<<<<< HEAD
            <div class="py-4 bg-light" id="viewAllOrganizations">
=======
<<<<<<< HEAD
            <div class="py-4 bg-light" id="viewAllOrganizations">
=======
            <div class="py-4 bg-light" id="SelfRegister">
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                <section>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 order-md-1  p-2">
                                <h1 class="text-center">Sign Up Manually via this button below!</h1>
                                <h4 class="text-center" mt-3>Select Organization</h4>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="row mb-3">
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org) in organizations" :key=org>
                                <div class="card mb-3 shadow" style="max-width: 540px;">
=======
                        <div class="row mb-5">
<<<<<<< HEAD
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org) in organizations" :key=org>
=======
<<<<<<< HEAD
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org) in organizations" :key=org>
=======
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org,index) in organizations" :key=org>
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                                <div class="card mb-3" style="max-width: 540px;">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                    <div class="card-header">
                                        <h4>ID:{{org.orgID}}</h4>
                                    </div>
                                    <div class="card-body mb-3">
                                        <h5 class="card-title">{{org.orgName}}</h5>
                                        <p class="card-text">{{org.address}}</p>
                                        <router-link v-bind:to="{name: 'SelfRegister',params:{name: org.orgName, id: org.orgID}}">
                                                <a href="#" class="btn btn-primary">Register Applicant</a>
                                        </router-link>
<<<<<<< HEAD
=======

>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                    </div>
                                </div> 
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="row mb-3 text-center">
                            <div class="col-12">
                                <router-link v-bind:to="{name: 'Home'}">
                                    <a href="#" class="btn btn-lg btn-outline-danger">Cancel</a>
                                </router-link>
                            </div>
                        </div>
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                    </div>
                </section>
            </div>
        <!-- content-->


   </main>
   <footer-component></footer-component>
</template>

<script>
    import HeaderComponent from './BaseComponents/HeaderComponent'
    import FooterComponent from './BaseComponents/FooterComponent'
    import axios from 'axios'

    export default {
        data: function() {
            return {
                organizations: []
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        methods: {
        },
        created() {
 axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
                     
                    axios.get('/getorg')
                    .then(response => {
                        this.organizations = response.data;
                    });
                }else if(response.data != 'admin'){
                    this.$router.push({
                        name: 'OrganizationRep'
                    });
                }else {
                    
                     this.$router.push({
                        name: 'Admin'
                    });
                    
                }
            });
        }

           
        
    }
</script>

<style>

</style>