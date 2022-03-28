<template>
<sidebar-component v-bind:menues="_menues">
    
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h3>Record a Organization Representative</h3>
                            <h5>For {{this.orgID}}</h5>
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
                                            <div class="col-lg-12">
                                                <label class="form-label required">Username</label>
                                                <input required text="Enter enter between 6 and 15 single-byte alphanumeric characters." 
                                                type="text" class="form-control" placeholder="Username" name="username" v-on:input="detectInput">

 
                                            </div>
                                        </div>
                                        
                                        <div class="form-row my-5">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label required">Full Name</label>
                                                <input required pattern=.*\S+.* title="Enter Firstname without space." 
                                                type="text" class="form-control" placeholder="First Name" 
                                                name="firstname" v-on:input="detectInput">
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" required pattern=.*\S+.* title="tEnter Lastname without space." 
                                                class="form-control" placeholder="Last Name" name="lastname" v-on:input="detectInput">
                                            </div>
                                        </div>
                                        
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                               <label class="form-label required">Mobile Number</label>
                                                <input required pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" 
                                                type="tel" class="form-control" placeholder="mobile No"
                                                 name="mobileNo" v-on:input="detectInput">
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                               <label class="form-label required">Email</label>
                                                <input required type="email" pattern = "[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                                                class="form-control" placeholder="Email" name="email" v-on:input="detectInput">
                                            </div>
                                        </div>
                            
                                        <div class="form-row my-5 pb-5">
                                            <div class="col-lg-12">
                                              <label class="form-label required">Job Title</label>
                                            <input required pattern="^([a-zA-Z0-9]{1,20})$" 
                                            title="Enter less than 20 characters" type="text" 
                                            class="form-control" placeholder="Job Title" 
                                            name="jobTitle" v-on:input="detectInput">
                                            </div>
                                        </div>

                                        <div class="text-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Confirm</button>
                                        </div>
                                         <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'ManageOrg'}">
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
                                <ul>
                                    <li>Username: {{username}}</li>
                                    <li>Fullname: {{fullname}}</li>
                                    <li>Mobile No: {{mobileNo}}</li>
                                    <li>Email: {{email}}</li>
                                    <li>Job Title: {{jobTitle}}</li>
                                </ul>
                            </div> 
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3" v-show="!loading">
                            <button type="button" class="btn btn-primary" v-on:click="submit">Confirm</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Confirm Modal -->

            <!-- Thankyou Modal -->
            <div class="modal fade" data-bs-backdrop ="static" id="thankyouModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                           <h4 class="modal-title text-center">Success</h4>
                        </div>
                        <div class="modal-body">
                            <p>The new Organization Representative account is successfully created.</p>
                            <p>The default password was sent to the email address</p>
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3">
                            <router-link v-bind:to="{name: 'ManageOrg'}">
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
        data: function() {
            return {
                _menues: [
                    {
                        name: "Manage Organization",
                        short: "Organization",
                        icon: "<i class='fa-solid fa-building-ngo'></i>",
                        link: "ManageOrg"
                    }

                ],

                username: "",
                fullname: "",
                mobileNo: "", 
                email: "",
                orgID: Cookies.get('orgID'),
                jobTitle:"",
                
                allerros: [],
                success : false,
                changed: false,
                loading: false
                

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
                            name: 'Home', 
                        });
                    }else if(response.data != 'admin'){
                        this.$router.push({
                            name: 'OrganizationRep', 
                        });
                    }
            });

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
                    const {username,firstname,lastname,mobileNo,email,jobTitle} = Object.fromEntries(new FormData(event.target));
                    this.username = username;
                    this.fullname = firstname.toUpperCase() + " " + lastname.toUpperCase();
                    this.mobileNo = mobileNo;
                    this.email = email;
                    this.jobTitle = jobTitle

                    const data = {
                        username: this.username,
                        fullname: this.fullname,
                        mobileNo: this.mobileNo,
                        email: this.email,
                    }

                    axios.post('/adduser/validate',data).then( response => {
                    this.allerros = [];
                    this.success = true;

                    var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                    confirmModal.show()
                    
                } ).catch((error) => {
                    this.allerros = error.response.data.errors;
                    this.success = false;

                    alert("Error! This username is already exist!");
                });
            },
            async submit() {
                this.loading = true
                const newUser = {
                    username: this.username,
                    fullname: this.fullname,
                    mobileNo: this.mobileNo,
                    email: this.email
                }

                const newOrgRep = {
                    orgID: this.orgID,
                    jobTitle: this.jobTitle,
                    username: this.username,
                }
                console.log(this.orgID);
                await axios.post('/adduser',newUser)
                await axios.post('/addorgrep',newOrgRep)

                this.loading = false

                const closeConfirmModal = bootstrap.Modal.getInstance(confirmModal);
                await closeConfirmModal.hide();

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