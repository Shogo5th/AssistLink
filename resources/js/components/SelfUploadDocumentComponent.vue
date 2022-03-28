<template>
<<<<<<< HEAD
<header-component v-bind:navFlag="false"></header-component>
=======
<<<<<<< HEAD
<header-component v-bind:navFlag="false"></header-component>
=======
<header-component></header-component>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    <!-- Form Card -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 text-center">
                            <h3>Add an Applicant</h3>
<<<<<<< HEAD
                            <h5>For {{this.orgName}}</h5>
=======
                            <h5>For {{$route.params.orgName}}</h5>
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
                                            <h4>Upload Document</h4>
                                        </div>
                                    </div> 
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    <form class="p-3" id="documentForm" enctype="multipart/form-data" v-on:submit.prevent="confirm">
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">File Name</label>
                                                <input required pattern=^[-0-9a-zA-Z_.\s]+$ 
                                                title="File names containing multibyte characters are not supported" 
<<<<<<< HEAD
=======
=======
                                    <form class="p-3" v-on:submit.prevent="confirm">
                                        <div class="form-row my-5">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label required">File Name</label>
<<<<<<< HEAD
                                                <input required pattern=^[-0-9a-zA-Z_.\s]+$ 
                                                title="File names containing multibyte characters are not supported" 
=======
<<<<<<< HEAD
                                                <input required pattern=^[-0-9a-zA-Z_.\s]+$ 
                                                title="File names containing multibyte characters are not supported" 
=======
<<<<<<< HEAD
                                                <input required pattern=^[-0-9a-zA-Z_.\s]+$ 
                                                title="File names containing multibyte characters are not supported" 
=======
<<<<<<< HEAD
<<<<<<< HEAD
                                                <input required pattern=^[-0-9a-zA-Z_.\s]+$ 
                                                title="File names containing multibyte characters are not supported" 
=======
                                                <input required pattern=^[-0-9a-zA-Z_.]+$ 
                                                oninvalid="this.setCustomValidity('File names containing multibyte characters are not supported')" 
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                                                <input required pattern=^[-0-9a-zA-Z_.]+$ 
                                                oninvalid="this.setCustomValidity('File names containing multibyte characters are not supported')" 
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                                                @dragleave="dragLeave" 
                                                @dragover.prevent 
=======
<<<<<<< HEAD
                                                @dragleave="dragLeave" 
                                                @dragover.prevent 
=======
                                                @dragleave="dragLeave"
                                                @dragover.prevent="dragOver"
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                                @drop.prevent="dropFile" 
                                                 
                                                :class="{enter: isEnter}">
                                                    Drop here
                                                </div>

                                                <div>
                                                    <ul>
<<<<<<< HEAD
                                                        <li v-for="file in files" :key=file>File: {{ file.name }}</li>
=======
<<<<<<< HEAD
                                                        <li v-for="file in files" :key=file>File: {{ file.name }}</li>
=======
                                                        <li>{{ this.files.name }}</li>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center mt-3 mb-3">
                                            <button type="submit" class="btn btn-lg btn-outline-primary mb-3">Confirm</button>
                                        </div>
                                         <div class="text-center mt-3 mb-3">
                                            <router-link v-bind:to="{name: 'Home'}">
<<<<<<< HEAD
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
=======
<<<<<<< HEAD
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
=======
<<<<<<< HEAD
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
=======
<<<<<<< HEAD
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
=======
<<<<<<< HEAD
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
=======
<<<<<<< HEAD
<<<<<<< HEAD
                                                <button type="button" class="btn bfdtn-lg btn-outline-danger" v-show="this.isUploaded">Finish</button>
=======
                                                <button type="button" class="btn btn-lg btn-outline-danger">Cancel</button>
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                                                <button type="button" class="btn btn-lg btn-outline-danger">Cancel</button>
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
                                <ul>
                                    <li>Filename: {{filename}}</li>
                                    <li>description: {{description}}</li>
                                    <li>File: {{upload}}</li>
                                </ul>
                            </div> 
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3" v-show="!loading">
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
                                <ul>
<<<<<<< HEAD
                                    <li>Filename: {{filename}}</li>
                                    <li>description: {{description}}</li>
                                    <li>File: {{upload}}</li>
=======
                                    <li>Filename: {{this.filename}}</li>
                                    <li>description: {{this.description}}</li>
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                                </ul>
                            </div> 
                        </div>
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
                            <p>The new document is successfully uploaded.</p>
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3">
                            <router-link v-bind:to="{name: 'SelfUpload',params:{username: this.username, IDno: this.IDno, orgName: this.orgName}}">
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
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                            <p>The new Applicant account is successfully created.</p>
                            <p>The username and default password were generated</p>
                        </div>
                        <div class="modal-footer justify-content-center mt-3 mb-3">
                            <router-link v-bind:to="{name: 'uploadDocument',params:{username: this.username, IDno: this.IDno, orgName: this.orgName}}">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
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
</template>

<script>
    import HeaderComponent from './BaseComponents/HeaderComponent'
    import FooterComponent from './BaseComponents/FooterComponent'
<<<<<<< HEAD
    import Cookies from 'js-cookie';
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    import axios from 'axios'

    export default {
        data: function() {
            return {
<<<<<<< HEAD

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
                loading: false
=======
<<<<<<< HEAD

                files: [],
=======
<<<<<<< HEAD

=======
                _menues: [
                    {
                        name: "Register Applicant",
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
                    }

                ],
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                files: "",
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                isEnter: false,
                orgName: this.$route.params.orgName,
                IDno: this.$route.params.IDno,
                username: this.$route.params.username,
                filename: "",
<<<<<<< HEAD
                description: "",
                isUploaded: false,
                upload: "",
                docID:""
=======
<<<<<<< HEAD
                description: "",
                isUploaded: false
=======
<<<<<<< HEAD
                description: "",
                isUploaded: false
=======
<<<<<<< HEAD
                description: "",
                isUploaded: false
=======
<<<<<<< HEAD
<<<<<<< HEAD
                description: "",
                isUploaded: false
=======
                description: ""
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                description: ""
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            }
        },
        components: {
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent
        },
<<<<<<< HEAD
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
=======
        methods: {
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            dragEnter() {
                this.isEnter = true;
            },
            dragLeave() {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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

                
<<<<<<< HEAD
=======
=======
                this.isEnter = false;
            },
            dropFile() {
                this.files = [...event.dataTransfer.files]
                this.isEnter = false;
            },

            confirm(event) {
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
                this.logding = true //show spinner
=======
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                
                const newDocument = {
                    filename: this.filename,
                    description: this.description,
                    ApplicantsUserusername: this.username,
                    ApplicantsIDno: this.IDno
                }
                
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                
                await axios.post('/uploaddocument',newDocument).then(response => {
                    this.docID = response.data;
                });
                //this.uploadFile();
                await this.uploadFile();
<<<<<<< HEAD

                this.loading = false //hide spinner
=======
=======
                await axios.post('/uploaddocument',newDocument)
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
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
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
                this.isUploaded  = true;
=======
<<<<<<< HEAD
                this.isUploaded  = true;
=======
<<<<<<< HEAD
                this.isUploaded  = true;
=======
<<<<<<< HEAD
<<<<<<< HEAD
                this.isUploaded  = true;
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
            }


        }

>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
           
        
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

    ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

<<<<<<< HEAD
=======
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
</style>