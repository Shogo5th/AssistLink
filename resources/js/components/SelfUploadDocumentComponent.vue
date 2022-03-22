<template>
<header-component></header-component>
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h3>Add an Applicant</h3>
                            <h5>For {{$route.params.orgName}}</h5>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-6 order-md-1  mx-auto">
                            <div class="card formCard">
                                <div class="card-body mb-3">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <h4>Upload Document</h4>
                                        </div>
                                    </div> 
                                    <form class="p-3" v-on:submit.prevent="confirm">
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">File Name</label>
                                                <input required pattern=^[-0-9a-zA-Z_.\s]+$ 
                                                title="File names containing multibyte characters are not supported" 
                                                type="text" class="form-control" placeholder="File name" name="filename">
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12">
                                                <label class="form-label required">Description</label>
                                                <input required
                                                type="text" class="form-control" placeholder="description" name="description">
                                            </div>
                                        </div>
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <div class="drop_area" 
                                                @dragenter="dragEnter" 
                                                @dragleave="dragLeave"
                                                @dragover.prevent="dragOver"
                                                @drop.prevent="dropFile" 
                                                 
                                                :class="{enter: isEnter}">
                                                    Drop here
                                                </div>

                                                <div>
                                                    <ul>
                                                        <li>{{ this.files.name }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Confirm</button>
                                        </div>
                                         <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'Home'}">
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
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
                                    <li>Filename: {{this.filename}}</li>
                                    <li>description: {{this.description}}</li>
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
                            <p>The new document is successfully uploaded.</p>
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3">
                            <router-link v-bind:to="{name: 'SelfUpload',params:{username: this.username, IDno: this.IDno, orgName: this.orgName}}">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" v-on:click="closeThankyouModal">Continue</button>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Thankyou Modal -->
        </div>
</template>

<script>
    import HeaderComponent from './BaseComponents/HeaderComponent'
    import FooterComponent from './BaseComponents/FooterComponent'
    import axios from 'axios'

    export default {
        data: function() {
            return {

                files: "",
                isEnter: false,
                orgName: this.$route.params.orgName,
                IDno: this.$route.params.IDno,
                username: this.$route.params.username,
                filename: "",
                description: "",
                isUploaded: false
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        methods: {
            dragEnter() {
                this.isEnter = true;
            },
            dragLeave() {
                this.isEnter = false;
            },
            dropFile() {
                this.files = [...event.dataTransfer.files]
                this.isEnter = false;
            },

            confirm(event) {
                const {filename,description} = Object.fromEntries(new FormData(event.target));
                this.filename = filename;
                this.description = description;

                const data = {
                    username: this.username,
                    filename: this.filename,
                    description: this.description,
                    username: this.username,
                    IDno : this.IDno
                }

                var confirmModal = new bootstrap.Modal(document.getElementById('confirmModal'),{})
                confirmModal.show()
            },
            async submit() {
                
                const newDocument = {
                    filename: this.filename,
                    description: this.description,
                    ApplicantsUserusername: this.username,
                    ApplicantsIDno: this.IDno
                }
                
                await axios.post('/uploaddocument',newDocument)

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
                this.isUploaded  = true;
            }


        }

           
        
    }
</script>

<style>
    .drop_area {
        color: gray;
        font-weight: bold;
        font-size: 1.2em;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 80%px;
        height: 300px;
        border: 5px solid gray;
        border-radius: 15px;
    }

    .enter {
        border: 10px dotted;
    }
</style>