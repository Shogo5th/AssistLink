<template>
    <main>
<<<<<<< HEAD
        <header-component v-bind:navFlag="false"></header-component>
=======
<<<<<<< HEAD
        <header-component v-bind:navFlag="false"></header-component>
=======
        <header-component></header-component>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

         <!-- content -->
            <div class="py-4 bg-light" id="ViewAppeal">
                <section>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 order-md-1  p-2">
                                <h1 class="text-center">Appeals</h1>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="row">
=======
<<<<<<< HEAD
                        <div class="row">
=======
                        <div class="row mb-5">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <div class="col-md-12 order-md-1  p-2">
                                <!-- Tabs navs -->
                                <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex2-tab-1" data-bs-toggle="tab" href="#ex2-tabs-1" role="tab" 
<<<<<<< HEAD
                                    aria-controls="ex2-tabs-1" aria-selected="true">Current Appeals</a>
=======
<<<<<<< HEAD
                                    aria-controls="ex2-tabs-1" aria-selected="true">Current Appeals</a>
=======
<<<<<<< HEAD
                                    aria-controls="ex2-tabs-1" aria-selected="true">Current Appeals</a>
=======
                                    aria-controls="ex2-tabs-1" aria-selected="true">current Appeals</a>
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                                            <div class="row mb-3">
                                                <!-- loading spinner -->
                                                <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                                    <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(current) in currentAppeals" :key=current v-show="!loading">
                                                    <div class="card mb-3 shadow" style="max-width: 540px;">
=======
<<<<<<< HEAD
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(current) in currentAppeals" :key=current>
                                                    <div class="card mb-3 shadow" style="max-width: 540px;">
=======
                                            <div class="row mb-5">
                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(current) in currentAppeals" :key=current>
                                                    <div class="card mb-3" style="max-width: 540px;">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                                        <div class="card-header">
                                                            <h4>ID:{{current.appealID}}</h4>
                                                        </div>
                                                        <div class="card-body mb-3">
<<<<<<< HEAD
                                                            <h5>From Date: <span style="font-size:16px;">{{current.fromDate}}</span></h5>
                                                            <h5>To Date: <span style="font-size:16px;">{{current.toDate}}</span></h5>
=======
<<<<<<< HEAD
                                                            <h5>From Date: <span style="font-size:16px;">{{current.fromDate}}</span></h5>
                                                            <h5>To Date: <span style="font-size:16px;">{{current.toDate}}</span></h5>
=======
<<<<<<< HEAD
                                                            <h5>From Date: <span style="font-size:16px;">{{current.fromDate}}</span></h5>
                                                            <h5>To Date: <span style="font-size:16px;">{{current.toDate}}</span></h5>
=======
                                                            <h5>From Date: {{current.fromDate}}</h5>
                                                            <h5>To Date: {{current.toDate}}</h5>
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                                            <div class="row mb-3">
                                                <!-- loading spinner -->
                                                <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                                    <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(past) in pastAppeals" :key=past v-show="!loading">
                                                    <div class="card mb-3 shadow" style="max-width: 540px;">
=======
<<<<<<< HEAD
                                            <div class="row mb-3">
                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(past) in pastAppeals" :key=past>
                                                    <div class="card mb-3 shadow" style="max-width: 540px;">
=======
                                            <div class="row mb-5">
                                                <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(past) in pastAppeals" :key=past>
                                                    <div class="card mb-3" style="max-width: 540px;">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                                        <div class="card-header">
                                                            <h4>ID:{{past.appealID}}</h4>
                                                        </div>
                                                        <div class="card-body mb-3">
                                                            <h5 class="card-title">From Date: {{past.fromDate}}</h5>
                                                            <h5 class="card-title">To Date: {{past.toDate}}</h5>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                                            <h5>Description:</h5>
                                                            <p>{{past.description}}</p>
                                                            <h5>Outcome: </h5>
                                                            <p>{{past.outcome}}</p>
<<<<<<< HEAD
=======
=======
                                                            <h5>description:</h5>
                                                            <p>{{past.description}}</p>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        </div>
                        <div class="row mb-3 text-center">
                            <div class="col-12">
                                <router-link v-bind:to="{name: 'Home'}">
                                    <a href="#" class="btn  btn-lg btn-outline-danger">Cancel</a>
                                </router-link>
                            </div>
<<<<<<< HEAD
=======
=======
        
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                appealID: "",
                loading: false
=======
                appealID: ""
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
        async created() {
            Cookies.remove('orgID');
            Cookies.remove('orgName');
=======
        created() {
            Cookies.remove('orgID');
<<<<<<< HEAD
            Cookies.remove('orgName');
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            Cookies.remove('type');
            Cookies.remove('fromDate');
            Cookies.remove('toDate');
            Cookies.remove('appealID');
            Cookies.remove('description');
<<<<<<< HEAD
            Cookies.remove('orgName');
=======
<<<<<<< HEAD
            Cookies.remove('orgName');
=======
<<<<<<< HEAD
            Cookies.remove('orgName');
=======
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            
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
<<<<<<< HEAD
            
            this.loading = true
            await axios.get('/viewCurrentAppeals')
=======

             axios.get('/viewCurrentAppeals')
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            .then(response => {
                this.currentAppeals = response.data;
            });

<<<<<<< HEAD
            await axios.get('/viewPastAppeals')
            .then(response => {
               this.pastAppeals = response.data;
               this.loading = false
=======
            axios.get('/viewPastAppeals')
            .then(response => {
               this.pastAppeals = response.data;
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            });

            
        }

           
        
    }
</script>

<style>

</style>