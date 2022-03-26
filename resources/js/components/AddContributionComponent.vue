
<template>
<sidebar-component v-bind:menues="_menues">
<header-component></header-component>
    <div class="py-4">
        <section>
            <div class="container-fluid" id="box">
                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        <h1>Record Contribution</h1>
                        <h4>For AppealID: {{appealID}}</h4>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-6 order-md-1  mx-auto">
                        <div class="card shadow">
                            <div class="card-body mb-3">
                                <div class="row">
                                    <div class="col-lg-12 text-center mb-5">
                                        <h4>Contributed</h4>
                                        <h5 class="text-danger" v-show="selected === ''">Plese select Contribution type</h5>
                                    </div>
                                </div>
                                <form class="p-3" v-on:submit.prevent="confirm">
                                    <div class="form-row  row">
                                        <div class="col-lg-6 mb-3 text-center">
                                            <input type="radio" class= "big-radio" id="goods" value = "goods" name="contribution"  v-model="selected"><br>
                                            <label for="goods">Goods</label>
                                        </div>
                                        <div class="col-lg-6 text-center">
                                            <input type="radio" class= "big-radio" id="cash" value = "cash" name="contribution" v-model="selected"><br>
                                            <label for="cash">Cash</label>
                                        </div>
                                    </div>


                                    <!-- Goods Donation -->
                                    <div class="form-row my-5" v-if="selected == 'goods'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Descriotion</label>
                                            <input required type="text" class="form-control" placeholder="Description" name="description">
                                        </div>
                                    </div>
                                    <div class="form-row my-5" v-if="selected == 'goods'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Estimated Value</label>
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control"
                                             placeholder="Estimated Value" name="estimatedValue"
                                            title="Enter positive number">
                                        </div>
                                    </div>

                                    
                                    <!-- Cash Donation -->
                                    <div class="form-row my-5" v-if="selected == 'cash'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Cash Amount</label>
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control" placeholder="Cash Amount" name="cashAmount"
                                            title="Enter positive number">
                                        </div>
                                    </div>
                                    <div class="form-row my-5" v-if="selected == 'cash'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Payment Channel</label>
                                            <input required type="text" class="form-control"  placeholder="Payment Channle" name="paymentChannel">
                                        </div>
                                    </div>
                                    <div class="form-row my-5" v-if="selected == 'cash'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Reference No</label>
                                           <input required pattern="^([0-9]{11,20})$" type="text" class="form-control"  
                                           placeholder="Reference No" name="referenceNo" title="Enter enter number between 11 and 20 digits">
                                        </div>
                                    </div>




                                    
                                    <div class="text-center mt-3 mb-3" v-show="selected !=''">
                                        <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Continue</button>
                                    </div>
                                    <div class="text-center mt-3 mb-3">
                                        <router-link v-bind:to="{name: 'recordContribution'}">
                                            <button type="button" class="btn btn-lg btn-outline-danger">Cancel</button>
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
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title text-center">Are you sure to submit?</h4>
                        <div class="mt-3">
                            <ul>
                                <li>Type: {{selected}}</li>
                                <li  v-if="selected == 'goods'">Descriotion: {{description}}</li>
                                <li  v-if="selected == 'goods'">Estimated Value: {{estimatedValue}}</li>
                                <li v-if="selected == 'cash'">Cash Amount: {{cashAmount}}</li>
                                <li v-if="selected == 'cash'">Payment Channel: {{paymentChannel}}</li>
                                <li v-if="selected == 'cash'">Reference No: {{referenceNo}}</li>
                            </ul>
                        </div> 
                    </div>
                    <div class="modal-footer justify-content-center mt-3 mb-3">
                        <button type="button" class="btn btn-primary" v-on:click="submit">Confirm</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Confirm Modal -->

        <!-- Thankyou Modal -->
        <div class="modal fade" id="thankyouModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Success</h4>
                    </div>
                    <div class="modal-body">
                        <p>Your contribution has been successful</p>
                    </div>
                    <div class="modal-footer justify-content-center mt-3 mb-3">
                        <router-link v-bind:to="{name: 'recordContribution'}">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="closeThankyouModal">OK</button>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thankyou Modal -->
    </div>
</sidebar-component>
</template>


<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import Cookies from 'js-cookie';
    import axios from 'axios'
    

    export default {
        data() {
            return {
                appeals: [],
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
                appealID: "",
                orgID: "",
                orgName: "",
                selected: "",
                CashAmount: "",
                paymentChannel: "",
                referenceNo: "",
                contributionID: "",
                description: "",
                estimatedValue: ""

            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        
        created() {
            //set attributes from Cookie
            this.appealID = Cookies.get('appealID')
            axios.get('/loginCheck')
                .then(response => {

                    if(response.data == 'none') {
                            this.$router.push({
                            name: 'Home'
                        });
                    }else if(response.data == 'admin'){
                        this.$router.push({
                            name: 'Admin'
                        });
                    }else {
                        this.orgName = response.data['orgName'];
                        this.orgID = response.data['orgID'];

                    }
            });

        },
        methods: {
            confirm(event) {

                if(this.selected == 'cash') {
                    const {cashAmount,paymentChannel,referenceNo} = Object.fromEntries(new FormData(event.target));
                    this.cashAmount = cashAmount;
                    this.paymentChannel = paymentChannel;
                    this.referenceNo = referenceNo;
                }else {
                    const {description,estimatedValue} = Object.fromEntries(new FormData(event.target));
                    this.description = description;
                    this.estimatedValue = estimatedValue;
                }
           

                var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                confirmModal.show()
            },
            async submit() {

                let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                let randomID = '';
                for ( var i = 0; i < 8; i++ ) {
                    randomID += chars.charAt(Math.floor(Math.random() * chars.length));
                    this.contributionID = randomID;
                }

                const newContribution = {
                    appealID: this.appealID,
                    orgID: this.orgID,
                    contributionID: this.contributionID
                    
                }
                await axios.post('/addContribution',newContribution)

                if(this.selected == "cash") {
                    const newDonation = {
                        amount: this.cashAmount,
                        referenceNo: this.referenceNo,
                        paymentChannel: this.paymentChannel,
                        contributionID: this.contributionID,
                        orgID: this.orgID,
                        appealID: this.appealID
                    }


                    await axios.post('/addContribution/CashDonation',newDonation)
                }else{
                    const newDonation = {
                        description: this.description,
                        estimatedValue: this.estimatedValue,
                        contributionID: this.contributionID,
                        orgID: this.orgID,
                        appealID: this.appealID
                    }


                    await axios.post('/addContribution/Goods',newDonation)
                }
                

                
                

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
<style scoped>
 .big-radio {width: 30px; height: 30px;}
</style>