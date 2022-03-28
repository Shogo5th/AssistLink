<template>
<sidebar-component v-bind:menues="_menues">
    <div class="py-3">
        <section>
            <div class="container-fluid" id="box">
                <div class="row mb-5">
                    <div class="col-lg-10 order-md-1  mx-auto">
                        <div class="card shadow">
                            <div class="card-body mb-3">
                                <div class="row mb-3">
                                    <div class="col-lg-12">
                                        <h2>AppealID: {{appealID}}</h2>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="row mb-3" v-show="!loading">
=======
                                <div class="row mb-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    <div class="col-lg-12">
                                        <h4>From <span style="font-size: 24px;">{{fromDate}}</span> To <span style="font-size: 24px;">{{toDate}}</span></h4>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="row text-center" v-show="!loading">
=======
                                <div class="row text-center">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    <div class="col-12">
                                        <router-link v-bind:to="{name: 'selectApplicant'}">
                                            <a href="#" class="btn btn-primary">Record Aid Disbursement</a>
                                        </router-link>
                                    </div>
                                </div>
<<<<<<< HEAD
                                <div class="row mt-5 mb-3" v-show="!loading">
=======
                                <div class="row mt-5 mb-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    <div class="col-lg-12 mb-5">
                                        <h2>Description: </h2>
                                        <p>{{description}}</p>
                                    </div>
                                </div>
                                
                                <div class="row mt-3 mb-3">
                                    <div class="col-12">
<<<<<<< HEAD
                                        <h3 v-show="!loading">Cash Contribution</h3>
                                         
                                        <!-- loading spinner -->
                                        <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                            <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>

                                        <h5 class="text-center" v-show="this.cashDonations.length === 0 && !loading">There is no Cash Contribution recorded</h5>
                                            <div class ="contributiontable">
                                                <table class="text-center table table-primary table-hover" v-show="this.cashDonations.length != 0 && !loading">
=======
                                        <h3>Cash Contribution</h3>
                                        <h5 class="text-center" v-show="this.cashDonations.length === 0">There is no Cash Contribution recorded</h5>
                                            <div class ="contributiontable">
                                                <table class="text-center table table-primary table-hover" v-show="this.cashDonations.length != 0">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                                    <thead>
                                                        <tr>
                                                        <th scope="col">Contribution ID</th>
                                                        <th scope="col">Received Date</th>
                                                        <th scope="col">Payment Channel</th>
                                                        <th scope="col">Reference No</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="(cash) in cashDonations" :key=cash>
                                                            <td>{{cash.contributionID}}}</td>
                                                            <td>{{cash.receivedDate}}</td>
                                                            <td>{{cash.paymentChannel}}</td>
                                                            <td>{{cash.referenceNo}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mb-3">
<<<<<<< HEAD
                                        <h3 v-show="!loading">Goods Contribution</h3>
                                        <h5 class="text-center" v-show="this.goodsDonations.length === 0 && !loading">There is no Goods Contribution recorded</h5>
                                        <div class="contributiontable">
                                       <table class="table table-primary table-hover text-center" v-show="this.goodsDonations.length != 0 && !loading">
=======
                                        <h3>Goods Contribution</h3>
                                        <h5 class="text-center" v-show="this.goodsDonations.length === 0">There is no Goods Contribution recorded</h5>
                                        <div class="contributiontable">
                                       <table class="table table-primary table-hover text-center" v-show="this.goodsDonations.length != 0">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            <thead>
                                                <tr>
                                                <th scope="col">Contribution ID</th>
                                                <th scope="col">Received Date</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Estimated Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(goods) in goodsDonations" :key=goods>
                                                    <td>{{goods.contributionID}}}</td>
                                                    <td>{{goods.receivedDate}}</td>
                                                    <td>{{goods.description}}</td>
                                                    <td>{{goods.estimatedValue}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>   
                                </div> 
                                <div class="row mt-3 mb-3 text-center">
                                    <div class="col-12">
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'NewContribution'}" v-show="!loading">
=======
                                        <router-link v-bind:to="{name: 'NewContribution'}">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            <a href="#" class="btn btn-primary">Record Contribution</a>
                                        </router-link>
                                    </div>
                                </div>
                                <div class="row mt-5 mb-3 text-center">
                                    <div class="col-12">
                                        <router-link v-bind:to="{name: 'organizeAidAppeal'}">
                                            <a href="#" class="btn btn-danger">Back</a>
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
</sidebar-component>

</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'

    export default {
        data: function() {
            return {
                _menues: [
                    {
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
                        link: "viewApplicants"
                    },
                    {
                        name: "Organize Aid Appeal",
                        short: "Appeal",
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
                        link: "organizeAidAppeal"
                    },
                    {
                        name: "Record Contribution",
                        short: "Contribution",
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
                cashDonations:[],
                goodsDonations:[],
                orgID: "",
                orgName: "",
                address: "",
                fromDate: "",
                toDate: "",
                description: "",
                appealID: "",
<<<<<<< HEAD
                loading: false
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        created() {
            this.orgID = Cookies.get('orgID');
            this.appealID = Cookies.get('appealID');
            axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
                   
                }else if(response.data == 'admin'){
                     this.$router.push({
                        name: 'Admin'
                    });
                }else {
<<<<<<< HEAD
                    this.loading = true;
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    axios.post('/findAppeal',{'appealID':this.appealID})
                        .then(response => {
                            this.fromDate = response.data[0]['fromDate'];
                            this.toDate = response.data[0]['toDate'];
                            this.description = response.data[0]['description'];
                    
                    });
                    
                    axios.post('/viewContributions/Cash',{'appealID':this.appealID})
                        .then(response => {
                            this.cashDonations = response.data;
                    });

                    axios.post('/viewContributions/Goods',{'appealID':this.appealID})
                        .then(response => {
                            this.goodsDonations = response.data;
<<<<<<< HEAD
                            this.loading = false;
                    });

                    
=======
                    });

>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                }
            });


        },
        methods: {
            
        }
        
    }
</script>

<style>
.contributiontable {
    overflow-x: scroll;
}
</style>