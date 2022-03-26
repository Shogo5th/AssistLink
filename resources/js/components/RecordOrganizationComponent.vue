<template>
<sidebar-component v-bind:menues="_menues">
    
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h3>Record a Organization</h3>
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
                                    <form class="p-3" v-on:submit.prevent="confirm">
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                                <label class="form-label required">Organization Name</label>
<<<<<<< HEAD
                                                <input required  
=======
                                                <input required pattern="^([a-zA-Z0-9\s]{6,30})$" title="Enter enter between 6 and 15 single-byte alphanumeric characters." 
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                                type="text" class="form-control" placeholder="Organization name" name="orgName">
                                            </div>
                                        </div>
                                        
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">Address</label>
                                                <input required type="text" class="form-control" placeholder="Address" name="address">
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
                                    <li>Organization Name: {{orgName}}</li>
                                    <li>Address: {{address}}</li>
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
                            <p>The new Organization is successfully created.</p>
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
    import axios from 'axios'

    export default {
        data: function() {
            return {
                _menues: [
                    {
                        name: "Manage Organization",
                        short: "Organization",
<<<<<<< HEAD
                        icon: "<i class='fa-solid fa-building-ngo'></i>",
=======
                        icon: "<i class='fas fa-calendar-alt'></i>",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                        link: "ManageOrg"
                    }

                ],

                orgName: "",
                address: ""
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

        
        },
        methods: {
                confirm(event) {
                        const {orgName,address} = Object.fromEntries(new FormData(event.target));
                        this.orgName = orgName;
                        this.address = address;

                        var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                        confirmModal.show();
                },
                async submit() {
                    const data = {
                        orgName: this.orgName,
                        address: this.address
                    }
                    await axios.post('/addorg',data)
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