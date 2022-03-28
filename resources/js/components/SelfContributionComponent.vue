<template>
<<<<<<< HEAD
<header-component v-bind:navFlag="false"></header-component>
=======
<<<<<<< HEAD
<header-component v-bind:navFlag="false"></header-component>
=======
<header-component></header-component>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    <div class="py-4">
        <section>
            <div class="container-fluid" id="box">
                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        <h3>Make a Donation</h3>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 order-md-1  mx-auto">
<<<<<<< HEAD
                        <div class="card shadow">
=======
<<<<<<< HEAD
                        <div class="card shadow">
=======
                        <div class="card">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <div class="card-body mb-3">
                                <form class="p-3" v-on:submit.prevent="confirm">
                                    <div class="row">
                                        <div class="col-lg-12 text-center mb-5">
                                            <h4>Via Payment Provider</h4>
                                            <h5>Organization: {{orgName}}</h5>
                                        </div>
                                    </div>
                                    <div class="row my-5">
                                        <div class="col-lg-12 mb-1">
                                            <label class="form-label required">Select Appeal ID (in the Organization)</label><br>
                                            <select v-model="selectedAppeal">
                                                <!-- if I use v-model, I cannot use default selected
                                                so, I will user  value ="" and selected, then use v-if to show
                                                fromDate and toDate retrieved from cookies -->
                                                <option value="" selected>
                                                    {{appealID}}
                                                </option>
                                                <option v-for="(appeal) in appeals" :key=appeal.apppealID 
                                                v-bind:value="appeal" v-show="appeal.appealID != appealID"> {{appeal.appealID}}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-1" v-if="selectedAppeal != ''"><!-- for default -->
                                            From <span style="font-size:18px;">{{selectedAppeal.fromDate}}</span> 
                                            To <span style="font-size:18px;">{{selectedAppeal.toDate}}</span>
                                        </div>

                                        <div class="col-lg-12" v-if="selectedAppeal == ''"> <!-- for default -->
                                            From <span style="font-size:18px;">{{fromDate}}</span> 
                                            To <span style="font-size:18px;">{{toDate}}</span>
                                        </div>
                                    </div>
                                    <div class="row my-5" v-if="selectedAppeal != ''"><!-- for default -->
                                        <div class="col-lg-12">
                                            Description
                                            <p>{{selectedAppeal.description}}</p>
                                            
                                        </div>
                                    </div>

                                    <div class="row my-5" v-if="selectedAppeal == ''"> <!-- for default -->
                                        <div class="col-lg-12">
                                            Description
                                            <p>{{description}}</p>
                                            
                                        </div>
                                    </div>

                                    <div class="form-row my-5">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Cash Amount</label>
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control" placeholder="Cash Amount" name="cashAmount"
                                            title="Enter positive number">
                                        </div>
                                    </div>
                                    <div class="form-row my-5">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Payment Channel</label>
                                            <input required type="text" class="form-control"  placeholder="Payment Channle" name="paymentChannel">
                                        </div>
                                    </div>
                                    <div class="form-row my-5">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Reference No</label>
                                           <input required pattern="^([0-9]{11,20})$" type="text" class="form-control"  
                                           placeholder="Reference No" name="referenceNo" title="Enter enter number between 11 and 20 digits">
                                        </div>
                                    </div>

                                    <div class="text-center mt-3 mb-3">
                                        <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Continue</button>
                                    </div>
                                        <div class="text-center mt-3 mb-3">
                                        <router-link v-bind:to="{name: 'ViewAppeal'}">
                                            <button type="button" class="btn bfdtn-lg btn-outline-danger">Cancel</button>
                                        </router-link>          
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Confirm Modal -->
        <div class="modal fade" id="confirmModal" >
<<<<<<< HEAD
            <div class="modal-dialog modal-dialog-centered" data-bs-backdrop ="static">
=======
            <div class="modal-dialog modal-dialog-centered">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
<<<<<<< HEAD
                        
                        <!-- loading spinner -->
                        <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                            <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <h4 class="modal-title text-center" v-show="!loading">Are you sure to contribute?</h4>
                        <div class="mt-3" v-show="!loading">
=======
                        <h4 class="modal-title text-center">Are you sure to contribute?</h4>
                        <div class="mt-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <ul>
                                <li>AppealID: {{selectedAppealID}}</li>
                                <li>Organization: {{orgName}}</li>
                                <li>CashAmount: {{cashAmount}}</li>
                                <li>Payment Channel: {{paymentChannel}}</li>
                                <li>Reference No: {{referenceNo}}</li>
                            </ul>
                        </div> 
                    </div>
<<<<<<< HEAD
                    <div class="modal-footer justify-content-center mt-3 mb-3" v-show="!loading">
=======
                    <div class="modal-footer justify-content-center mt-3 mb-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        <button type="button" class="btn btn-primary" v-on:click="submit">Confirm</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Confirm Modal -->

        <!-- Thankyou Modal -->
<<<<<<< HEAD
        <div class="modal fade" id="thankyouModal" data-bs-backdrop ="static">
=======
        <div class="modal fade" id="thankyouModal">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Success</h4>
                    </div>
                    <div class="modal-body">
                        <p>Your contribution has been successful.</p>
                    </div>
                    <div class="modal-footer justify-content-center mt-3 mb-3">
                        <router-link v-bind:to="{name: 'ViewAppeal'}">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="closeThankyouModal">Continue</button>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thankyou Modal -->
    </div>
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
                appeals:[],
                orgID: "",
                appealID: "",
                fromDate: "",
                toDate: "",
                description: "",
                selectedAppeal: "",
                selectedAppealID: "",
                CashAmount: "",
                paymentChannel: "",
                referenceNo: "",
<<<<<<< HEAD
                contributionID: "",
                loading: false
=======
                contributionID: ""
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        created() {
            this.orgID = Cookies.get('orgID');
            this.appealID = Cookies.get('appealID');
            this.fromDate = Cookies.get('fromDate');
            this.toDate = Cookies.get('toDate');
            this.description = Cookies.get('description');
            this.orgName = Cookies.get('orgName');

            axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
                    if(this.appealID === undefined) {
                        this.$router.push({
                        name: 'Home'
                        });
                    }
                    axios.post('/viewCurrentAppeals/inOrganizations',{'orgID':Cookies.get('orgID')})
                    .then(response => {
                        this.appeals = response.data;
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
             confirm(event) {

                 if(this.selectedAppeal === '') {
                     this.selectedAppealID = this.appealID;
                 }else {
                     this.selectedAppealID = this.selectedAppeal.appealID;
                 }

                const {cashAmount,paymentChannel,referenceNo} = Object.fromEntries(new FormData(event.target));
                this.cashAmount = cashAmount;
                this.paymentChannel = paymentChannel;
                this.referenceNo = referenceNo;

                var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                confirmModal.show()
            },
            async submit() {
<<<<<<< HEAD
                this.loading = true
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

                let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                let randomID = '';
                for ( var i = 0; i < 8; i++ ) {
                    randomID += chars.charAt(Math.floor(Math.random() * chars.length));
                    this.contributionID = randomID;
                }

                const newContribution = {
                    appealID: this.selectedAppealID,
                    orgID: this.orgID,
                    contributionID: this.contributionID
                    
                }

                const newCashDonation = {
                    amount: this.cashAmount,
                    referenceNo: this.referenceNo,
                    paymentChannel: this.paymentChannel,
                    contributionID: this.contributionID,
                    orgID: this.orgID,
                    appealID: this.selectedAppealID
                }

                await axios.post('/addContribution',newContribution)
                await axios.post('/addContribution/CashDonation',newCashDonation)
<<<<<<< HEAD
                this.loading = false
=======

>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                // hide confirm modal
                const closeConfirmModal = bootstrap.Modal.getInstance(confirmModal);
                await closeConfirmModal.hide();

                // show thankyou modal to notify user new applicant was created 
                const thankyouModal = new bootstrap.Modal(document.getElementById('thankyouModal'),{})
                await thankyouModal.show();

            },
            closeThankyouModal() {
                const closeThankyouModal = bootstrap.Modal.getInstance(thankyouModal)
                closeThankyouModal.hide()
            }

        }
        
    }
</script>

<style>

</style>