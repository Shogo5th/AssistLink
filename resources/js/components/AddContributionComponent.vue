
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
<<<<<<< HEAD
                                            <input required type="text" class="form-control" placeholder="Description" 
                                            name="description" v-on:click="detectInput">
=======
                                            <input required type="text" class="form-control" placeholder="Description" name="description">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                        </div>
                                    </div>
                                    <div class="form-row my-5" v-if="selected == 'goods'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Estimated Value</label>
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control"
                                             placeholder="Estimated Value" name="estimatedValue"
<<<<<<< HEAD
                                            title="Enter positive number" v-on:click="detectInput">
=======
                                            title="Enter positive number">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                        </div>
                                    </div>

                                    
                                    <!-- Cash Donation -->
                                    <div class="form-row my-5" v-if="selected == 'cash'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Cash Amount</label>
<<<<<<< HEAD
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" 
                                            class="form-control" placeholder="Cash Amount" name="cashAmount"
                                            title="Enter positive number" v-on:click="detectInput">
=======
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control" placeholder="Cash Amount" name="cashAmount"
                                            title="Enter positive number">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                        </div>
                                    </div>
                                    <div class="form-row my-5" v-if="selected == 'cash'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Payment Channel</label>
<<<<<<< HEAD
                                            <input required type="text" class="form-control"  
                                            placeholder="Payment Channle" name="paymentChannel" v-on:click="detectInput">
=======
                                            <input required type="text" class="form-control"  placeholder="Payment Channle" name="paymentChannel">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                        </div>
                                    </div>
                                    <div class="form-row my-5" v-if="selected == 'cash'">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Reference No</label>
                                           <input required pattern="^([0-9]{11,20})$" type="text" class="form-control"  
<<<<<<< HEAD
                                           placeholder="Reference No" name="referenceNo" 
                                           title="Enter enter number between 11 and 20 digits" v-on:click="detectInput">
=======
                                           placeholder="Reference No" name="referenceNo" title="Enter enter number between 11 and 20 digits">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                        </div>
                                    </div>




                                    
                                    <div class="text-center mt-3 mb-3" v-show="selected !=''">
                                        <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Continue</button>
                                    </div>
                                    <div class="text-center mt-3 mb-3">
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'recordContribution'}">
=======
<<<<<<< HEAD
                                        <router-link v-bind:to="{name: 'recordContribution'}">
=======
                                        <router-link v-bind:to="{name: 'Home'}">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
        <div class="modal fade" data-bs-backdrop ="static" id="confirmModal" >
=======
        <div class="modal fade" id="confirmModal" >
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            <div class="modal-dialog modal-dialog-centered">
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

                        <h4 class="modal-title text-center"  v-show="!loading">Are you sure to submit?</h4>
                        <div class="mt-3"  v-show="!loading">
=======
                        <h4 class="modal-title text-center">Are you sure to submit?</h4>
                        <div class="mt-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                    <div class="modal-footer justify-content-center mt-3 mb-3"  v-show="!loading">
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
        <div class="modal fade" data-bs-backdrop ="static" id="thankyouModal">
=======
        <div class="modal fade" id="thankyouModal">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
<<<<<<< HEAD
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
                        name: "Register Applicants",
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        link: "viewApplicants"
                    },
                    {
                        name: "Organize Aid Appeal",
                        short: "Appeal",
<<<<<<< HEAD
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
=======
<<<<<<< HEAD
                        icon: "<i class='fa-solid fa-heart-circle-plus'></i>",
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        link: "organizeAidAppeal"
                    },
                    {
                        name: "Record Contribution",
                        short: "Contribution",
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        icon: "<i class='fa-regular fa-handshake'></i>",
                        link: "recordContribution"
                    },
                    {
                        name: "Record Disbursement",
                        short: "Disbursement",
                        icon: "<i class='fa-solid fa-hand-holding-heart'></i>",
                        link: "recordAidDisbursement"
<<<<<<< HEAD
=======
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "recordContribution"
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                estimatedValue: "",
                changed: false,
                loading: false
=======
                estimatedValue: ""
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

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

<<<<<<< HEAD
            if(!this.changed)
                window.addEventListener("beforeunload", this.prevent);

        },
        destroyed: function () {
            if(!this.changed)
            window.removeEventListener("beforeunload", this.prevent);
        },
        methods: {
            detectInput(){
                this.changed = true;
            },
            prevent (event) {
                event.returnValue = "Changes you made may not be saved.";
            },
=======
        },
        methods: {
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                this.loading = true;
=======

>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
                
<<<<<<< HEAD
                this.loading = false;
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
<style scoped>
 .big-radio {width: 30px; height: 30px;}
</style>