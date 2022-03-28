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
                                            <h4>Upload Document</h4>
                                        </div>
                                    </div> 

                                    <form class="p-3" id="documentForm" enctype="multipart/form-data" v-on:submit.prevent="confirm">
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
                                                @dragover.prevent 
                                                @drop.prevent="dropFile" 
                                                 
                                                :class="{enter: isEnter}">
                                                    Drop here
                                                </div>

                                                <div>
                                                    <ul>
                                                        <li v-for="file in files" :key=file>File: {{ file.name }}</li>
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
                                    <li>Filename: {{filename}}</li>
                                    <li>description: {{description}}</li>
                                    <li>File: {{upload}}</li>
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
                            <p>The new document is successfully uploaded.</p>
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

                files: [],
                isEnter: false,
                orgName: "",
                IDno: "",
                username: "",
                filename: "",
                description: "",
                isUploaded: false,
                upload: "",
                docID:"",
                loading: false,
                changed: false,

                files: [],

                _menues: [
                    {
                        name: "Register Applicant",
                        short: "Applicant",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "viewApplicants"
                    }

                ],
                
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
        created: function() {
            this.orgName= Cookies.get('orgName')
            this.IDno = Cookies.get('IDno')
            this.username = Cookies.get('username')
            
            if(!this.changed)
            window.addEventListener("beforeunload", this.prevent);
        },
        destroyed: function () {
            if(!this.changed)
            window.removeEventListener("beforeunload", this.prevent);
        },
        beforeRouteLeave (to, from, next) {
            if(!this.isUploaded) {
                let answer = window.confirm("Changes you made may not be saved.")
                if (answer) {
                    next()
                } else {
                    next(false)
                }
            }else {
                next()
            }

        },
        methods: {
            prevent (event) {
                event.returnValue = "Changes you made may not be saved.";
            },
            dragEnter() {
                this.isEnter = true;
            },
            dragLeave() {
            this.isEnter = false;
            },
            dropFile() {
                this.files = [...event.dataTransfer.files];
                this.isEnter = false;
                this.upload = this.files[0]['name'];
            },

            confirm(event) {

                try {
                    console.log(this.files[0]['name']);
                }catch(e) {
                    alert('Please select your document!');
                    return;
                }

                if(this.files[0]['type'] != "application/pdf") {
                    alert("Please select pdf file");
                    return;
                }

                         
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



                this.isEnter = false;
            },
            async submit() {
                this.logding = true //show spinner
                
                const newDocument = {
                    filename: this.filename,
                    description: this.description,
                    ApplicantsUserusername: this.username,
                    ApplicantsIDno: this.IDno
                }
                
                await axios.post('/uploaddocument',newDocument).then(response => {
                    this.docID = response.data;
                });
                //this.uploadFile();
                await this.uploadFile();

                this.loading = false //hide spinner
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
                var f = document.getElementById('documentForm');
                f.reset();
                this.files  = "";
            },
            uploadFile() {
                this.files.forEach(file => {
                    let form = new FormData()
                    form.append('file', file)
                    axios.post('/upload', form).then(response => {
                        const newDoc = {path: response.data, docID: this.docID}
                        axios.post('/upload/savePath',newDoc);


                    }).catch(error => {
                        console.log(error)
                    })
                })
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
    ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

</style>