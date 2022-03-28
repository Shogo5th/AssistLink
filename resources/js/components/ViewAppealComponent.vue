<template>
<div>
    <main>
        <header-component v-bind:navFlag="false"></header-component>

         <!-- content -->
            <div class="py-4 bg-light" id="ViewAppeal">
                <section>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 order-md-1  p-2">
                                <h1 class="text-center">Appeals</h1>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 order-md-1  p-2">
                                <!-- Tabs navs -->
                                <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex2-tab-1" data-bs-toggle="tab" href="#ex2-tabs-1" role="tab" 
                                    aria-controls="ex2-tabs-1" aria-selected="true">Current Appeals</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex2-tab-2" data-bs-toggle="tab" 
                                    href="#ex2-tabs-2" role="tab" aria-controls="ex2-tabs-2" aria-selected="false">Past Appeals</a>
                                </li>
                                </ul>
                                <!-- Tabs navs -->

                                <!-- Tabs content -->
                                <div class="tab-content" id="ex2-content">
                                    <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                                        <div class="container">
                                            <div class="row mb-3">

                                                <!-- loading spinner -->
                                                <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                                    <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(current) in currentAppeals" :key=current v-show="!loading">
                                                    <div class="card mb-3 shadow" style="max-width: 540px;">
                                                        <div class="card-header">
                                                            <h4>ID:{{current.appealID}}</h4>
                                                        </div>
                                                        <div class="card-body mb-3">
                                                            <h5>From Date: <span style="font-size:16px;">{{current.fromDate}}</span></h5>
                                                            <h5>To Date: <span style="font-size:16px;">{{current.toDate}}</span></h5>
                                                            <h5>description:</h5>
                                                            <p>{{current.description}}</p>
                                                            <router-link v-bind:to="{name: 'AppealDetail',params:{id: current.OrganizationorgID}}">
                                                                    <a href="#" class="btn btn-primary" v-on:click="setOrgID(current.OrganizationorgID)
                                                                    ,setType('Current'),setAppeal(current.fromDate,current.toDate,current.appealID,current.description)">View Organization Info</a>
                                                            </router-link>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                                       <div class="container">

                                            <div class="row mb-3">
                                                <!-- loading spinner -->
                                                <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                                    <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(past) in pastAppeals" :key=past v-show="!loading">
                                                    <div class="card mb-3 shadow" style="max-width: 540px;">
                                                        <div class="card-header">
                                                            <h4>ID:{{past.appealID}}</h4>
                                                        </div>
                                                        <div class="card-body mb-3">
                                                            <h5 class="card-title">From Date: {{past.fromDate}}</h5>
                                                            <h5 class="card-title">To Date: {{past.toDate}}</h5>

                                                            <h5>Description:</h5>
                                                            <p>{{past.description}}</p>
                                                            <h5>Outcome: </h5>
                                                            <p>{{past.outcome}}</p>

                                                            <router-link v-bind:to="{name: 'AppealDetail'}">
                                                                    <a href="#" class="btn btn-primary" v-on:click="setOrgID(past.OrganizationorgID),setType('Past')">View Organization Info</a>
                                                            </router-link>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tabs content -->
                            </div>
                        </div>
                        <div class="row mb-3 text-center">
                            <div class="col-12">
                                <router-link v-bind:to="{name: 'Home'}">
                                    <a href="#" class="btn  btn-lg btn-outline-danger">Cancel</a>
                                </router-link>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        <!-- content-->


   </main>
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
                currentAppeals: [],
                pastAppeals: [],
                appealID: "",
                loading: false
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        methods: {
            setOrgID(id) {
                Cookies.set('orgID',id);
                this.type = Cookies.get('orgID');
            },
            setType(type) {
                Cookies.set('type',type);
            },
            setAppeal(from,to,id,desc){
                Cookies.set('fromDate',from);
                Cookies.set('toDate',to);
                Cookies.set('appealID',id);
                Cookies.set('description',desc);
            }
        },

        async created() {
            Cookies.remove('orgID');
            Cookies.remove('orgName');

            Cookies.remove('type');
            Cookies.remove('fromDate');
            Cookies.remove('toDate');
            Cookies.remove('appealID');
            Cookies.remove('description');
            
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
            
            this.loading = true
            await axios.get('/viewCurrentAppeals')
            .then(response => {
                this.currentAppeals = response.data;
            });

            await axios.get('/viewPastAppeals')
            .then(response => {
               this.pastAppeals = response.data;
               this.loading = false
            });

            
        }

           
        
    }
</script>

<style>

</style>