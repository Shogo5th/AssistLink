<template>
<div>
        <header-component v-bind:navFlag="false"></header-component>
            <div class="py-4">
                <section>
                    <div class="container-fluid" id="box">
                        <div class="row mb-3">
                            <div class="col-md-12 text-center">
                                <h3>View Appeals</h3>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <!-- loading spinner -->
                            <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>

                            <div class="col-lg-6 order-md-1  mx-auto" v-show="!loading">
                                <div class="card shadow">
                                    <div class="card-body mb-3">
                                        <div class="row">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h4>Organization Info</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mb-3">
                                                <h4>Organization ID : {{orgID}}</h4>
                                                <h4>Organization Name : {{orgName}}</h4>
                                                <h4>Address :<br> {{address}}</h4>
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col-lg-12 mt-3"  v-if=" this.type == 'Current' ">
                                                <router-link v-bind:to="{name: 'SelfContribution'}">
                                                    <button type="button" class="btn btn-outline-primary" v-on:click="setCookie()">Contribute Cash</button>
                                                </router-link> 
                                            </div>  
                                        </div> 
                                        <div class="row text-center">
                                            <div class="col-lg-12 mt-3 mb-3">
                                                <router-link v-bind:to="{name: 'ViewAppeal'}">
                                                    <button type="button" class="btn btn-outline-danger">Back</button>
                                                </router-link>  
                                            </div>   
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </section>
            </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
    import HeaderComponent from './BaseComponents/HeaderComponent'
    import FooterComponent from './BaseComponents/FooterComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'

    export default {
        data: function() {
            return {
               orgID: "",
               orgName: "",
               address: "",
               type: "",
               loading: false
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        created() {
            this.orgID = Cookies.get('orgID');
            this.type = Cookies.get('type');
            axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
                    this.loading = true;
                    axios.post('/searchOrg',{'orgID':this.orgID})
                        .then(response => {

                            this.orgName = response.data[0]['orgName']
                            this.address = response.data[0]['address']
                            this.loading = false;

                         });
                         
                    axios.post('/findOrganization',{'orgID':Cookies.get('orgID')})
                    .then(response => {
                        this.orgName = response.data[0]['orgName'];
                        this.address = response.data[0]['address'];
                        Cookies.set('orgName',this.orgName);
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


        },
        methods: {
            setCookie() {
                Cookies.set('orgName',this.orgName)
            }
        }
        
    }
</script>

<style>

</style>