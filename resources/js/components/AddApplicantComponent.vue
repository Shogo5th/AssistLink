<template>
<sidebar-component v-bind:menues="_menues">
    
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h3>Add an Applicant</h3>
<<<<<<< HEAD
                            <h5>For {{orgName}}</h5>
=======
                            <h5>For {{$route.params.name}}</h5>
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 order-md-1  mx-auto">
<<<<<<< HEAD
                            <div class="card formCard shadow">
=======
<<<<<<< HEAD
                            <div class="card formCard shadow">
=======
                            <div class="card formCard">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                                                <input required pattern=.*\S+.* title="Enter Firstname without space." 
                                                type="text" class="form-control" placeholder="First Name" 
                                                name="firstname" v-on:clicl="detectInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required pattern=.*\S+.* 
                                                title="Enter Lastname without space." class="form-control" 
                                                placeholder="Last Name" name="lastname" v-on:clicl="detectInput">
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                                <input required pattern=.*\S+.* title="Enter Firstname without space." type="text" class="form-control" placeholder="First Name" name="firstname">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required pattern=.*\S+.* title="Enter Lastname without space." class="form-control" placeholder="Last Name" name="lastname">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                                                <input required pattern=.*\S+.* oninvalid="this.setCustomValidity('Enter Firstname without space.')" type="text" class="form-control" placeholder="First Name" name="firstname">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required pattern=.*\S+.* oninvalid="this.setCustomValidity('Enter Lastname without space.')" class="form-control" placeholder="Last Name" name="lastname">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                                <label class="form-label required">IDno</label>
                                                <input required pattern="^([a-zA-Z0-9]{6,15})$" 
<<<<<<< HEAD
                                                title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
                                                type="text" class="form-control" placeholder="IDno" name="IDno" 
                                                v-on:clicl="detectInput">
=======
<<<<<<< HEAD
                                                title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
=======
<<<<<<< HEAD
                                                title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
=======
<<<<<<< HEAD
                                                title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
=======
<<<<<<< HEAD
                                                title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
=======
<<<<<<< HEAD
<<<<<<< HEAD
                                                title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
=======
                                                oninvalid="this.setCustomValidity('Enter enter between 6 and 15 single-byte alphanumeric characters.')" 
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                                                oninvalid="this.setCustomValidity('Enter enter between 6 and 15 single-byte alphanumeric characters.')" 
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                                type="text" class="form-control" placeholder="IDno" name="IDno">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">Address</label>
<<<<<<< HEAD
                                                <input required type="text" class="form-control" 
                                                placeholder="Address" name="address" v-on:clicl="detectInput">
=======
                                                <input required type="text" class="form-control" placeholder="Address" name="address">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">Household Income</label>
<<<<<<< HEAD
                                                <input required pattern="^([1-9]\d*|0)(\.\d+)?$" 
                                                type="text" class="form-control" placeholder="household income" name="householdIncome"
                                                title="Enter positive number" v-on:clicl="detectInput">
=======
                                                <input required pattern="^([1-9]\d*|0)(\.\d+)?$" type="text" class="form-control" placeholder="household income" name="householdIncome"
<<<<<<< HEAD
                                                title="Enter positive number">
=======
<<<<<<< HEAD
                                                title="Enter positive number">
=======
<<<<<<< HEAD
                                                title="Enter positive number">
=======
<<<<<<< HEAD
                                                title="Enter positive number">
=======
<<<<<<< HEAD
<<<<<<< HEAD
                                                title="Enter positive number">
=======
                                                oninvalid="this.setCustomValidity('Enter positive number')">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                                                oninvalid="this.setCustomValidity('Enter positive number')">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Continue</button>
                                        </div>
                                         <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'viewApplicants'}">
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
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmation</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- loading spinner -->
                            <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>

                            <h4 class="modal-title text-center" v-show="!loading">Are you sure to submit?</h4>
                            <div class="mt-3" v-show="!loading">
=======
            <div class="modal fade" id="confirmModal" >
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
<<<<<<< HEAD
                            <h4 class="modal-title">Confirmation</h4>
=======
<<<<<<< HEAD
                            <h4 class="modal-title">Confirmation</h4>
=======
<<<<<<< HEAD
                            <h4 class="modal-title">Confirmation</h4>
=======
<<<<<<< HEAD
                            <h4 class="modal-title">Confirmation</h4>
=======
<<<<<<< HEAD
<<<<<<< HEAD
                            <h4 class="modal-title">Confirmation</h4>
=======
                            <h4 class="modal-title">Log out</h4>
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                            <h4 class="modal-title">Log out</h4>
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <h4 class="modal-title text-center">Are you sure to submit?</h4>
                            <div class="mt-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                <ul>
                                    <li>IDno: {{IDno}}</li>
                                    <li>Fullname: {{fullname}}</li>
                                    <li>Address: {{address}}</li>
                                    <li>Household Income: {{householdIncome}}</li>
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
                            <p>The new Applicant account is successfully created.</p>
                            <p>The username and default password were generated</p>
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3">
<<<<<<< HEAD
                            <router-link v-bind:to="{name: 'uploadDocument'}">
=======
<<<<<<< HEAD
                            <router-link v-bind:to="{name: 'uploadDocument'}">
=======
<<<<<<< HEAD
                            <router-link v-bind:to="{name: 'uploadDocument'}">
=======
<<<<<<< HEAD
                            <router-link v-bind:to="{name: 'uploadDocument'}">
=======
<<<<<<< HEAD
                            <router-link v-bind:to="{name: 'uploadDocument'}">
=======
<<<<<<< HEAD
<<<<<<< HEAD
                            <router-link v-bind:to="{name: 'uploadDocument'}">
=======
                            <router-link v-bind:to="{name: 'uploadDocument',params:{username: this.username, IDno: this.IDno, orgName: this.orgName}}">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                            <router-link v-bind:to="{name: 'uploadDocument',params:{username: this.username, IDno: this.IDno, orgName: this.orgName}}">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="closeThankyouModal">Continue</button>
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
<<<<<<< HEAD
    import Cookies from 'js-cookie';
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    import axios from 'axios'

    export default {
        data: function() {
            return {
                _menues: [
<<<<<<< HEAD
                    {
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
<<<<<<< HEAD
                                      {
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fa-regular fa-address-card'></i>",
=======
                    {
                        name: "Register Applicant",
<<<<<<< HEAD
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
                    }
<<<<<<< HEAD
=======
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "recordContribution"
=======
<<<<<<< HEAD
                        short: "Applicant",
=======
<<<<<<< HEAD
                        short: "Applicant",
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        short: "Applicant",
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "viewApplicants"
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                    }

>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                ],

                address: "",
                fullname: "",
                IDno: "", 
                householdIncome: "",
<<<<<<< HEAD
                orgID: "",
                orgName:"",
                username: "",
                
                allerros: [],
                success : false,
                changed: false,
                loading: false
=======
<<<<<<< HEAD
                orgID: "",
                orgName:"",
=======
<<<<<<< HEAD
                orgID: "",
                orgName:"",
=======
<<<<<<< HEAD
                orgID: "",
                orgName:"",
=======
<<<<<<< HEAD
                orgID: "",
                orgName:"",
=======
<<<<<<< HEAD
<<<<<<< HEAD
                orgID: "",
                orgName:"",
=======
                orgID: this.$route.params.id,
                orgName:this.$route.params.name,
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                orgID: this.$route.params.id,
                orgName:this.$route.params.name,
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                username: "",
                
                allerros: [],
                success : false
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                

            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
        methods: {
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
                        this.success = true;

                        var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                        confirmModal.show()
                        
                    } ).catch((error) => {
                        this.allerros = error.response.data.errors;
                        this.success = false;

                        alert("Error! This IDno is already exist!");
                    });
                },
                async submit() {
                    
<<<<<<< HEAD
                    this.loading = true;
                    
                    /* create usernmae */
                    this.username = this.generateUsername();
=======
                    /* create usernmae */
<<<<<<< HEAD
                    this.username = this.generateUsername();
=======
                    var strong = 1000;
                    var newUsername =  new Date().getTime().toString(6)  + Math.floor(strong*Math.random()).toString(6)
                    this.username = newUsername;
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    

                    const newUser = {
                        fullname: this.fullname,
<<<<<<< HEAD
                        username: this.username,
                        OrganizationorgID: this.orgID
=======
<<<<<<< HEAD
                        username: this.username,
                        OrganizationorgID: this.orgID
=======
                        username: newUsername,
                        OrganizationorgID: this.orgID,
                        Userusername : this.username
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    }
                    await axios.post('/adduser/applicant',newUser)

                    const newApplicant = {
                        IDno: this.IDno,
                        address: this.address,
                        householdIncome: this.householdIncome,
                        username: this.username,
                        orgID: this.orgID
                    }
                    
                    await axios.post('/addApplicant',newApplicant)

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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                }


        }

           
        
    }
</script>

<style>
</style>