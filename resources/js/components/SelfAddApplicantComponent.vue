<template>
<div>
<header-component v-bind:navFlag="false"></header-component>

<!-- Form Card -->
    <div class="py-4">
        <section>
            <div class="container-fluid" id="box">
                <div class="row mb-3">
                    <div class="col-md-12 text-center">
                        <h3>Add an Applicant</h3>
                        <h5>For {{this.orgName}}</h5>
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
                                <form class="p-3" v-on:submit.prevent="checkValidation">
                                    <div class="form-row my-5">
                                        <div class="col-lg-6 mb-3">
                                            <label class="form-label required">Full Name</label>
                                            <input required pattern=.*\S+.* title="Enter Firstname without space." 
                                            type="text" class="form-control" placeholder="First Name" name="firstname" v-on:input="detectInput">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" required pattern=.*\S+.* title="Enter Lastname without space." 
                                            class="form-control" placeholder="Last Name" name="lastname" v-on:input="detectInput">
                                        </div>
                                    </div>
                                    <div class="form-row my-5">
                                        <div class="col-lg-12">
                                            <label class="form-label required">IDno</label>
                                            <input required pattern="^([a-zA-Z0-9]{6,15})$" 
                                            title="Enter enter between 6 and 15 single-byte alphanumeric characters without space." 
                                            type="text" class="form-control" placeholder="IDno" name="IDno"
                                            v-on:input="detectInput">
                                        </div>
                                    </div>
                                    <div class="form-row my-5">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Address</label>
                                            <input required type="text" class="form-control" placeholder="Address" name="address"
                                            v-on:input="detectInput">
                                        </div>
                                    </div>
                                    <div class="form-row my-5">
                                        <div class="col-lg-12 mb-3">
                                            <label class="form-label required">Household Income</label>
                                            <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" 
                                            class="form-control" placeholder="household income" name="householdIncome"
                                            title="Enter positive number" v-on:input="detectInput">
                                          
                                        </div>
                                    </div>
                                    <div class="text-center mt-3 mb-3">
                                        <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Continue</button>
                                    </div>
                                        <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'Home'}">
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
        <footer-component></footer-component>

        <!-- Confirm Modal -->
        <div class="modal fade" data-bs-backdrop ="static" id="confirmModal" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title text-center" v-show="!loading">Are you sure to submit?</h4>
                        
                        <!-- loading spinner -->
                        <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                            <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="mt-3" v-show="!loading">
                            <ul>
                                <li>IDno: {{IDno}}</li>
                                <li>Fullname: {{fullname}}</li>
                                <li>Address: {{address}}</li>
                                <li>Household Income: {{householdIncome}}</li>
                            </ul>
                        </div> 
                        <div class="modal-footer justify-content-center mt-3 mb-3" v-show="!loading">
                            <button type="button" class="btn btn-primary" v-on:click="submit">Confirm</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Confirm Modal -->

        <!-- Thankyou Modal -->
        <div class="modal fade" id="thankyouModal">
            <div class="modal-dialog modal-dialog-centered" data-bs-backdrop ="static">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center">Success</h4>
                    </div>
                    <div class="modal-body">
                        <p>The new Applicant account is successfully created.</p>
                        <p>The username and default password were generated</p>
                    </div>
                    <div class="modal-footer justify-content-center mt-3 mb-3">
                        <router-link v-bind:to="{name: 'SelfUpload'}">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="closeThankyouModal">Continue</button>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Thankyou Modal -->
    </div>
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
                _menues: [
                    {
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "viewApplicants"
                    }
                ],

                address: "",
                fullname: "",
                IDno: "", 
                householdIncome: "",
                orgID: "",
                orgName:"",
                username: "",
                
                allerros: [],
                changed: false,
                loading: false
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        created: function() {
            this.orgID = Cookies.get('orgID')
            this.orgName =Cookies.get('orgName')
            Cookies.remove('IDno')
            Cookies.remove('username')

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
                checkValidation(event) {

                    const {firstname,lastname,address,IDno,householdIncome} = Object.fromEntries(new FormData(event.target));
                    this.fullname = firstname.toUpperCase() + " " + lastname.toUpperCase();
                    this.IDno = IDno;
                    this.address = address;
                    this.householdIncome = householdIncome;

                    const data = {
                        fullname: this.fullname,
                        mobileNo: this.mobileNo,
                        email: this.email,
                        IDno: this.IDno
                    }

                    axios.post('/addApplicant/validate',data).then( response => {
                    this.allerros = [];


                    var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                    confirmModal.show()
                        
                    } ).catch((error) => {
                        this.allerros = error.response.data.errors;

                        alert("Error! This IDno is already exist!");
                    });
                },
                async submit() {
                                        
                    this.loading = true;

                    /* create usernmae */
                    this.username = this.generateUsername();
               
                    const newUser = {
                        fullname: this.fullname,
                        username: this.username,
                        OrganizationorgID: this.orgID
                    }

                    const newApplicant = {
                        IDno: this.IDno,
                        address: this.address,
                        householdIncome: this.householdIncome,
                        username: this.username,
                        orgID: this.orgID
                    }
                    
                    await axios.post('/adduser/applicant',newUser)

                    await axios.post('/addApplicant',newApplicant)
                     this.loading = false;

                    // set cookie
                    Cookies.set('orgName',this.orgName)
                    Cookies.set('IDno',this.IDno)
                    Cookies.set('username',this.username)

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

                },
                generateUsername() {
                    var l = 8;
                    var c = "abcdefghijklmnopqrstuvwxyz1234567890";
                    var cl = c.length;
                    var r = "";
                    for(var i=0; i < l; i++) {
                        r+= c[Math.floor(Math.random()*cl)];
                    }
                    return r;
                }


        }

           
        
    }
</script>

<style>
</style>