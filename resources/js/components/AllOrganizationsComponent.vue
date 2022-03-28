<template>
    <gototop-component></gototop-component>
    <main>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        <header-component v-bind:navFlag="false"></header-component>

         <!-- content -->
            <div class="py-4 bg-light" id="viewAllOrganizations">
<<<<<<< HEAD
=======
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
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
                            
                            <!-- loading spinner -->
                            <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>


                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org) in organizations" :key=org>
                                <div class="card mb-3 shadow" style="max-width: 540px;">
=======
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
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    <div class="card-header">
                                        <h4>ID:{{org.orgID}}</h4>
                                    </div>
                                    <div class="card-body mb-3">
                                        <h5 class="card-title">{{org.orgName}}</h5>
                                        <p class="card-text">{{org.address}}</p>
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'SelfRegister'}">
                                                <a href="#" class="btn btn-primary" v-on:click="setCookie(org.orgID,org.orgName)">Register Applicant</a>
                                        </router-link>
=======
                                        <router-link v-bind:to="{name: 'SelfRegister',params:{name: org.orgName, id: org.orgID}}">
                                                <a href="#" class="btn btn-primary">Register Applicant</a>
                                        </router-link>
<<<<<<< HEAD
=======

>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    </div>
                                </div> 
                            </div>
                        </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        <div class="row mb-3 text-center">
                            <div class="col-12">
                                <router-link v-bind:to="{name: 'Home'}">
                                    <a href="#" class="btn btn-lg btn-outline-danger">Cancel</a>
                                </router-link>
                            </div>
                        </div>
<<<<<<< HEAD
=======
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
    import Cookies from 'js-cookie';
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    import axios from 'axios'

    export default {
        data: function() {
            return {
<<<<<<< HEAD
                organizations: [],
                loading: false
=======
                organizations: []
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        methods: {
<<<<<<< HEAD
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
=======
        },
        created() {
 axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
                     
                    axios.get('/getorg')
                    .then(response => {
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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