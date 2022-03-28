<template>
<sidebar-component v-bind:menues="_menues">
    
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Record Aid Disbursement</h1>
                            <h6>Full Name: {{fullname}}</h6>
                            <h6>IDno: {{IDno}}</h6>
                            <h6>AppealID: {{appealID}}</h6>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 order-md-1  mx-auto">
                            <div class="card formCard shadow">
                                <div class="card-body mb-3">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h4>Fill in the Required Fields</h4>
                                        </div>
                                    </div> 
                                    <form class="p-3" id="disbursementForm" v-on:submit.prevent="confirm">
                                        <div class="form-row my-5">
                                        
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">Disbursement Date</label>
<<<<<<< HEAD
                                                <input type="date" class="input-sm form-control" 
                                                name="disbursementDate" id="disbursementDate" v-on:input ="detectInput" required>
=======
                                                <input type="date" class="input-sm form-control" name="disbursementDate" id="disbursementDate" required>
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">Cash Amount</label>
<<<<<<< HEAD
                                                <input required pattern="^([1-9]\d*|0)(\.\d+)?$" 
                                                type="text" class="form-control" placeholder="Cash Amount" name="cashAmount"
                                                title="Enter positive number" v-on:input ="detectInput">
=======
                                                <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control" placeholder="Cash Amount" name="cashAmount"
                                                title="Enter positive number">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                                <label class="form-label required">Goods</label>
<<<<<<< HEAD
                                                <input required class="form-control" placeholder="Goods" 
                                                name="goods" v-on:input ="detectInput">
=======
                                                <input required class="form-control" placeholder="Goods" name="goods">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Record</button>
                                        </div>
                                         <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'recordAidDisbursement'}">
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

                            <h4 class="modal-title text-center" v-show="!loading">Are you sure to submit?</h4>
                            <div class="mt-3" v-show="!loading">
=======
                            <h4 class="modal-title text-center">Are you sure to submit?</h4>
                            <div class="mt-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                <ul>
                                    <li>Disbursement Date: {{disbursementDate}}</li>
                                    <li>Cash Amount: {{cashAmount}}</li>
                                    <li>Goods: {{goods}}</li>
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
                            <p>The Disbursement was successfully recorded.</p>
                            <p>Please Enter Outcome</p>
                             <form id="disbursementForm" v-on:submit.prevent="closeThankyouModal">
                                <div class="row mt-3">
                                    <div class="col-lg-12">
                                        <label class="form-label required">Outcome</label>
                                    </div>
                                </div>
                                <div class="row">
                                     <div class="col-lg-12">
                                        <textarea v-model="this.outcome" name="outcome" rows="4" cols="40"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3 text-center">
                                    <div class="col-lg-12 mt-3 mb-3">
                                        <button type="sbumit" class="btn btn-danger" data-bs-dismiss="modal">Done</button>
                                    </div>
                                </div>  
                            </form>   
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
    import Cookies from 'js-cookie'
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

                orgID: "",
                IDno: "",
                fullname: "",
                appealID: "",
                cashAmount: "",
                disbursementDate: "",
                goods: "",
<<<<<<< HEAD
                outcome: "",
                changed: "",
                loading: false
=======
                outcome: ""
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                

            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        created: function() {
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
                        this.fullname = Cookies.get('fullname');
                        this.IDno = Cookies.get('IDno');
                        this.appealID = Cookies.get('appealID');
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
                        const {disbursementDate,cashAmount,goods} = Object.fromEntries(new FormData(event.target));
                        var dd = new Date(disbursementDate);
                        var today = new Date();
                        if(dd > today) {
                            alert("Please select today or before today!");
                            return;
                        }
                        this.disbursementDate = disbursementDate;
                        this.cashAmount = cashAmount;
                        this.goods = goods;

                        var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                        confirmModal.show()
                },
                async submit() {
<<<<<<< HEAD
                    this.loading = true;
=======

>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    const newDisbursement = {
                        disbursementDate: this.disbursementDate,
                        cashAmount: this.cashAmount,
                        goods: this.goods,
                        IDno: this.IDno,
                        appealID: this.appealID,
                        orgID: this.orgID,
                    }
                    await axios.post('/addDisbursement',newDisbursement)
                    await axios.post('/findAppeal/outcome',{appealID: this.appealID}).then(response => {
                        this.outcome = response.data[0]['outcome'];
<<<<<<< HEAD
                        this.loading = false;
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    });
                    

                    // hide confirm modal
                    const closeConfirmModal = bootstrap.Modal.getInstance(confirmModal);
                    await closeConfirmModal.hide();

                    // show thankyou modal to notify user new applicant was created 
                    const thankyouModal = new bootstrap.Modal(document.getElementById('thankyouModal'),{})
                    await thankyouModal.show();

                },
                closeThankyouModal() {
                    axios.post('/updateOutcome',{appealID: this.appealID,outcome: this.outcome})
                    const closeThankyouModal = bootstrap.Modal.getInstance(thankyouModal)
                    closeThankyouModal.hide()
                    this.$router.push({
                            name: 'selectApplicant'
                    });

                }


        }

           
        
    }
</script>

<style>
</style>