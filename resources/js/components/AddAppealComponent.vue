<template>
<sidebar-component v-bind:menues="_menues">
    
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h3>Add a New Appeal</h3>
                            <h5>For {{orgName}}</h5>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 order-md-1  mx-auto">
                            <div class="card formCard">
                                <div class="card-body mb-3">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h4>Fill in the Required Fields</h4>
                                        </div>
                                    </div> 
                                    <form class="p-3" v-on:submit.prevent="checkValidation">
                                        <div class="form-row my-5">
                                        
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">From Date</label>
                                                <input type="date" class="input-sm form-control" name="fromDate" required>
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">To Date</label>
                                                <input type="date" class="input-sm form-control" name="toDate" required>
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                                <label class="form-label required">Description</label>
                                                <textarea rows="10" cols="60" required class="form-control" placeholder="Description" name="description"></textarea>
                                                
                                                <!-- <p class="help-block">※Write in 100 words</p> -->

                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Continue</button>
                                        </div>
                                         <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'organizeAidAppeal'}">
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
                                    <li>From Date: {{fromDate}}</li>
                                    <li>To Date: {{toDate}}</li>
                                    <li>Description: <br>{{description}}</li>
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
                            <p>The new Appeal was successfully created.</p>
                            <p>TThe appealID was automatically generated</p>
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3">
                            <router-link v-bind:to="{name: 'organizeAidAppeal'}">
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
                    },
                    {
                        name: "Organize Aid Appeal",
                        short: "Appeal",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "organizeAidAppeal"
                    },
                    {
                        name: "Record Contribution",
                        short: "Contribution",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "recordContribution"
                    }

                ],

                toDate: "",
                fromDate: "",
                orgID: "",
                orgName:"",
                username: "",
                
                allerros: [],
                success : false
                

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
                        this.orgName = response.data['orgName'];
                        this.orgID = response.data['orgID'];
                    }
            });

        
        },
        methods: {
                checkValidation(event) {
                        const {fromDate,toDate,description} = Object.fromEntries(new FormData(event.target));
                        this.fromDate = fromDate;
                        this.toDate = toDate;
                        this.description = description;
                        
                        var fd = new Date(this.fromDate);
                        var td = new Date(this.toDate);

                        if(fd >= td) {

                            alert("FromDate must before ToDate!")
                            return 0;
                        }else {
                            var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                            confirmModal.show()
                        }


                },
                async submit() {

                    const newAppeal = {
                        fromDate: this.fromDate,
                        toDate: this.toDate,
                        description: this.description,
                        OrganizationorgID: this.orgID,
                    }
                    await axios.post('/addAppeal',newAppeal)
                    

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