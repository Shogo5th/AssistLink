<template>
    <gototop-component></gototop-component>
    <main>
        <header-component v-bind:navFlag="false"></header-component>

         <!-- content -->
            <div class="py-4 bg-light" id="viewAllOrganizations">
                <section>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 order-md-1  p-2">
                                <h1 class="text-center">Sign Up Manually via this button below!</h1>
                                <h4 class="text-center" mt-3>Select Organization</h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            
                            <!-- loading spinner -->
                            <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org) in organizations" :key=org>
                                <div class="card mb-3 shadow" style="max-width: 540px;">
                                    <div class="card-header">
                                        <h4>ID:{{org.orgID}}</h4>
                                    </div>
                                    <div class="card-body mb-3">
                                        <h5 class="card-title">{{org.orgName}}</h5>
                                        <p class="card-text">{{org.address}}</p>
                                        <router-link v-bind:to="{name: 'SelfRegister'}">
                                                <a href="#" class="btn btn-primary" v-on:click="setCookie(org.orgID,org.orgName)">Register Applicant</a>
                                        </router-link>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="row mb-3 text-center">
                            <div class="col-12">
                                <router-link v-bind:to="{name: 'Home'}">
                                    <a href="#" class="btn btn-lg btn-outline-danger">Cancel</a>
                                </router-link>
                            </div>
                        </div>
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
    import Cookies from 'js-cookie';
    import axios from 'axios'

    export default {
        data: function() {
            return {
                organizations: [],
                loading: false
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        methods: {
            setCookie(id,name) {
                Cookies.set('orgID',id);
                Cookies.set('orgName',name);
            }
        },
        created() {

            Cookies.remove('orgID');
            Cookies.remove('orgNames');

            axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
                    this.loading = true;
                    axios.get('/getorg')
                    .then(response => {
                        this.loading = false;
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