<template>
    <main>
        <header-component></header-component>

         <!-- content -->
            <div class="py-4 bg-light" id="ViewAppeal">
                <section>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 order-md-1  p-2">
                                <h1 class="text-center">Appeals</h1>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-md-12 order-md-1  p-2">
                                <!-- Tabs navs -->
                                <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex2-tab-1" data-bs-toggle="tab" href="#ex2-tabs-1" role="tab" 
                                    aria-controls="ex2-tabs-1" aria-selected="true">current Appeals</a>
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
                                            <div class="row mb-5">
                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(current) in currentAppeals" :key=current>
                                                    <div class="card mb-3" style="max-width: 540px;">
                                                        <div class="card-header">
                                                            <h4>ID:{{current.appealID}}</h4>
                                                        </div>
                                                        <div class="card-body mb-3">
                                                            <h5>From Date: {{current.fromDate}}</h5>
                                                            <h5>To Date: {{current.toDate}}</h5>
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
                                            <div class="row mb-5">
                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(past) in pastAppeals" :key=past>
                                                    <div class="card mb-3" style="max-width: 540px;">
                                                        <div class="card-header">
                                                            <h4>ID:{{past.appealID}}</h4>
                                                        </div>
                                                        <div class="card-body mb-3">
                                                            <h5 class="card-title">From Date: {{past.fromDate}}</h5>
                                                            <h5 class="card-title">To Date: {{past.toDate}}</h5>
                                                            <h5>description:</h5>
                                                            <p>{{past.description}}</p>
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
                currentAppeals: [],
                pastAppeals: [],
                appealID: ""
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
        created() {
            Cookies.remove('orgID');
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

             axios.get('/viewCurrentAppeals')
            .then(response => {
                this.currentAppeals = response.data;
            });

            axios.get('/viewPastAppeals')
            .then(response => {
               this.pastAppeals = response.data;
            });

            
        }

           
        
    }
</script>

<style>

</style>