<template>
    <gototop-component></gototop-component>
    <main>
        <header-component v-bind:navFlag="true"></header-component>
        <!-- content 1 Carousel-->
        <div class="py-4 bg-light" id="imageslide">
            <section>
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div id="slideCaprition" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideCaprition" v-bind:data-bs-slide-to="index" v-for="(indicator,index) in indicators" 
                                v-bind:class="{ active: index==0 }" v-bind:aria-current="{true: index==0}" v-bind:aria-label="'Slide' + index"></button>
                            </div>

                            <div class="carousel-inner">
                                <div class="carousel-item" v-for="(banner,index) in banners" v-bind:class="{ active: index==0 }">
                                    <img v-bind:src="banner.img" class="slideImage" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p v-html="banner.description"></p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#slideCaprition" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideCaprition" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content 1 -->

        <!-- content 2  About Us -->
            <div class="py-4 bg-light" id="AboutUs">
                <section>
                    <div class="container">
                        <div class="row mt-5 mb-5">
                            <h1 class="text-center mb-5 ">About Us</h1>
                            
                            <div class="col-md-5 mb-5 text-center">
                                <animation-component>
                                    <img class="img-fluid" src="../../../public/images/AboutUsLogo.jpeg" alt="About Us logo">
                                </animation-component>
                            </div>
                            <div class="col-md-7 mb-5 my-auto">
                                <animation-component>
                                    <p>
                                        Two students working strenously to help link communities and help those affected the most by
                                        recent world circumstances by creating a platform for Donators & Relief Organizations 
                                        to link up with respective communities and individuals.
                                    </p>
                                </animation-component>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        <!-- content 2 -->

         <!-- content -->
            <div class="py-4 bg-light" id="SelfRegister">
                <section>
                    <div class="container">
                        <div class="row mb-3">
                            <div class="col-md-12 order-md-1  p-2">
                                <h1 class="text-center">Sign Up Manually via this button below!</h1>
                                <h4 class="text-center" mt-3>Select Organization</h4>
                            </div>
                        </div>
<<<<<<< HEAD
                        <div class="row mb-3">

                            <!-- loading spinner -->
                            <div class="d-flex justify-content-center mt-5 mb-5" id="loadingMenu" v-if="loading">
                                <div class="spinner-border text-primary mt-5 mb-5" role="status" style="width: 5rem; height: 5rem;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            
=======
<<<<<<< HEAD
                        <div class="row mb-3">
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org,index) in organizations" :key=org>
                                <div class="card mb-3 shadow" style="max-width: 540px;">
                                    <div class="card-header">
                                        <h4>ID:{{org.orgID}}</h4>
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                        <div class="row mb-3">
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org,index) in organizations" :key=org>
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="card-header">
                                        <h4>ID:{{org.orgID}}</h4>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
                        <div class="row mb-5">
                            <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org,index) in organizations" :key=org>
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="card-header">
<<<<<<< HEAD
                                        <h4>ID:{{org.orgID}}</h4>
=======
                                        <h4>{{org.orgID}}</h4>
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
                                    <div class="card-body mb-3">
                                        <h5 class="card-title">{{org.orgName}}</h5>
                                        <p class="card-text">{{org.address}}</p>
                                        <router-link v-bind:to="{name: 'SelfRegister',params:{name: org.orgName, id: org.orgID}}">
<<<<<<< HEAD
                                                <a href="#" class="btn btn-primary" v-on:click="setCookie(org.orgID,org.orgName)">Register Applicant</a>
=======
                                                <a href="#" class="btn btn-primary">Register Applicant</a>
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                        </router-link>

                                    </div>
                                </div> 
                            </div>
                        </div>
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
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                <router-link v-bind:to="{name: 'viewAllOrganizations'}">
                                    <a href="#" class="btn btn-danger">View More Organizations</a>
                                </router-link>
                            </div>
                        </div>
                        
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    </div>
                </section>
            </div>
        <!-- content-->

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        <!-- content Conrtribution -->
            <div class="py-4 bg-light" id="Contribution">
                <section>
                    <div class="container">
                        <div class="row mt-5 mb-3">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                            <h1 class="text-center mb-5 ">Interested in making a donation ?</h1>
                            <h4 class="text-center mb-3">Follow these simple steps, and save lives today!</h4>
                            <div class="col-md-5 mb-5 text-center">
                                <animation-component>
                                    <img class="img-fluid" src="../../../public/images/donationimage.png" alt="About Us logo">
<<<<<<< HEAD
=======
=======
                            <h1 class="text-center mb-5 ">Are you Donor?</h1>
                            
                            <div class="col-md-5 mb-5 text-center">
                                <animation-component>
                                    <img class="img-fluid" src="../../../public/images/AboutUsLogo.jpeg" alt="About Us logo">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                </animation-component>
                            </div>
                            <div class="col-md-7 mb-5 my-auto">
                                <animation-component>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                    <p>Step 1 : Select the view appeals button below</p> 
                                    <p>Step 2 : You will be taken to a page to view all current and past appeals.</p> 
                                    <p>Step 3 : Select View Organization Info for the specific appeal you would like to make a donation for</p> 
                                    <p>Step 4 : Details of the Organization will be displayed, select Contribute Cash to continue.</p>  
                                    <p>Step 5 : Select the Appeal ID and fill in the other relevant payment information details.</p> 
                                    <p>Step 6 : Ensure all details are accurate in the confirmation menu before submitting.</p> 
<<<<<<< HEAD
=======
=======
                                    <p>
                                       text text text text text text text text text text text text text text text text text text
                                       text text text text text text text text text text text text text text text text text text
                                       text text text text text text text text text text text text text text text text text text
                                    </p>  
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                </animation-component>
                            </div>
                        </div>
                        
                        <div class="row mb-5">
                            <div class="col-12 text-center">
                                <animation-component>
                                    <router-link v-bind:to="{name: 'ViewAppeal'}">
                                        <a href="#" class="btn btn-danger">View Appeals</a>
                                    </router-link>
                                </animation-component>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <!-- content Contribution -->



<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======


>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======


>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        <!-- content 3 FAQ -->
        <div class="py-4 bg-light" id="FAQ">
            <section>
                <div class="container" id="box">
                    <div class="row  mb-5">
                        <div class="col-md-12 order-md-1  p-5">
                            <h1 class="text-center  mb-5">Frequently Asked Questions</h1>
                            
                            
                            <!-- FAQ Accordions -->
                            <div class="accordion w-80" id="QuestionsAccordion">
                                <animation-component>
                                    <div class="accordion-item" v-for="(faq,index) in faqs" :key=faq>
                                    
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" v-bind:data-bs-target="'#collapse' + index" aria-expanded="false" aria-controls="collapseOne">
                                            {{faq.question}}
                                        </button>
                                        </h2>
                                        <div v-bind:id="'collapse' + index" class="accordion-collapse collapse" aria-labelledby="headingOne">
                                            <div class="accordion-body">

                                                <!-- answer -->
                                                <p v-html="faq.answer"></p>
                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                </animation-component>
                            </div> 
                            <!-- FAQ Accordions -->

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content 3 -->

        <!-- content 4  Sponsors -->
        <div class="py-4 bg-light" id="Sponsors">
            <section>
                <div class="container" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center ">Sponsors</h1>
                        </div>
                    </div>

                        
                    <div class="row mb-5">
                        
                        
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(sponsor) in sponsors" :key=sponsor>
                        <animation-component>
<<<<<<< HEAD
                            <div class="card shadow" style="width: 14rem;">
=======
<<<<<<< HEAD
                            <div class="card shadow" style="width: 14rem;">
=======
                            <div class="card" style="width: 14rem;">
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                                <img v-bind:src= "sponsor.img" alt="SponsorImage" class="align-middle">
                                <div class="card-body">
                                    <h5 class="card-title">{{ sponsor.name}}</h5>
                                    <p class="card-text" v-html="sponsor.description"></p>
                                </div>
                            </div>
                        </animation-component>
                        </div>
                        
                            
                    </div>
                </div>
            </section>
        </div>
        <!-- content 4 -->

   </main>
   <footer-component></footer-component>
</template>
 
 <script>
    import HeaderComponent from './BaseComponents/HeaderComponent'
    import AnimationComponent from './BaseComponents/AnimationComponent'
    import FooterComponent from './BaseComponents/FooterComponent'
    import GotoTopComponent from './BaseComponents/GotoTopComponent'
<<<<<<< HEAD
    import Cookies from 'js-cookie'
=======
<<<<<<< HEAD
    import Cookies from 'js-cookie'
=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    import axios from 'axios'

    export default {
        data() {
            return {

                indicators: [
                    {
                        indicator: "slide1"
                    },
                    {
                        indicator: "slide2"
                    },
                    {
                        indicator: "slide3"
                    },
                    {
                        indicator: "slide4"
                    }
                   
                ],

                banners: [
                    {
                        img:require('../../../public/images/slidingimage1.jpg').default,
                        description: ""
                    },
                                        {
                        img:require('../../../public/images/slidingimage2.jpg').default,
                        description: ""
                    },
                    {
                        img:require('../../../public/images/slidingimage3.jpeg').default,
                        description: ""
                    },
                    {
                        img:require('../../../public/images/slidingimage4.jpg').default,
                        description: ""
                    }

                ],

                faqs: [
                    {
                        question: "1) Am I able to register for an account by myself ?",
<<<<<<< HEAD
                        answer: "A1) Yes, under the register column above the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
=======
<<<<<<< HEAD
                        answer: "A1) Yes, under the register column above the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
=======
<<<<<<< HEAD
                        answer: "A1) Yes, under the register column above the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
=======
<<<<<<< HEAD
                        answer: "A1) Yes, under the register column above the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
=======
<<<<<<< HEAD
                        answer: "A1) Yes, under the register column above the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
=======
<<<<<<< HEAD
<<<<<<< HEAD
                        answer: "A1) Yes, under the register column above the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
=======
                        answer: "A1) Yes, under the register column below the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                        answer: "A1) Yes, under the register column below the FAQ, users can now manually register themselves, without the direct help of Organization Representatives."
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    },
                    {
                        question: "2) How will I log in to my account ?",
                        answer: "A2) After registering successfully, your account details will be created and stored under your respective selected Organization."
                    },
                    {
                        question: "3) How am I able to make a donation ?",
                        answer: "A3) You can either make a donation via an Organization Representative or Manually via the View Appeals Page under Navigation."
                    },
                    {
                        question: "4) Where can you contact us ?",
                        answer: "A4) Our contact details can be found at the bottom of this page."
                    },
                    {
                        question: "5) What services are offered on our website, and how do you get access to them ?",
                        answer: "A5) Our services can also be found at the bottom of this page, as a donor you only have access to the View Appeals page, however the services offered are listed along."
                    }

                 ],
                 sponsors:[
                    {
                        name:"Kita Jaga Kita", 
                        description:"Stay strong & safe! Kita jaga Malaysia.<br>https://kitajaga.co/",
                        img: require('../../../public/images/sponsorimage1.jpeg').default
                    },
                    {
                        name:"White Flag!", 
                        description:"#WhiteFlagMalaysia! Signal for Help<br>https://www.freemalaysiatoday.com/category/nation/2021/06/29/fly-the-white-flag-to-signal-for-help-campaign-takes-off/",
                        img: require('../../../public/images/sponsorimage2.jpg').default
                    },
                    {
                        name:"Help University", 
                        description:"https://help.edu.my/",
                        img: require('../../../public/images/sponsorimage3.png').default
                    },
                    {
                        name:"Give 2 Asia!", 
                        description:"Support local nonprofits responding to the COVID-19 pandemic in Malaysia<br>https://give2asia.org/covid-19-pandemic-response-malaysia/",
                        img: require('../../../public/images/sponsorimage4.png').default
                    }
             
                    
                 ],
<<<<<<< HEAD
                 organizations: [],
                 loading: false
=======
                 organizations: []
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                 
             }
        },
        components: {
            'animation-component' : AnimationComponent,
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent,
            'gototop-component' : GotoTopComponent
        },
<<<<<<< HEAD
        methods: {
            setCookie(id,name) {
                Cookies.set('orgID',id);
                Cookies.set('orgName',name);
            }
        },
                
        created() {
=======
                
        created() {
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
            Cookies.remove('orgID');
            Cookies.remove('orgName');
            Cookies.remove('fromDate');
            Cookies.remove('toDate');
            Cookies.remove('appealID');
            Cookies.remove('IDno');
            Cookies.remove('description');
            Cookies.remove('address');



<<<<<<< HEAD
=======
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
            axios.get('/loginCheck')
            .then(response => {

                if(response.data == 'none') {
<<<<<<< HEAD
                    this.loading = true;
                    axios.get('/getorg/getlatestorg')
                    .then(response => {
                        this.organizations = response.data;
                        this.loading = false;
=======
                     
<<<<<<< HEAD
                    axios.get('/getorg/getlatestorg')
=======
<<<<<<< HEAD
                    axios.get('/getorg/getlatestorg')
=======
<<<<<<< HEAD
                    axios.get('/getorg/getlatestorg')
=======
<<<<<<< HEAD
<<<<<<< HEAD
                    axios.get('/getorg/getlatestorg')
=======
                    axios.get('/api/getorg')
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                    axios.get('/api/getorg')
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
                    .then(response => {
                        this.organizations = response.data;
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
                    });
                }else if(response.data != 'admin'){
                    this.$router.push({
                        name: 'OrganizationRep'
                    });
                }else {
                    
                     this.$router.push({
                        name: 'Admin'
                    });
                    
                }
            });

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
                axios.get('/api/getorg')
                .then(response => {
                    this.organizations = response.data;
                });
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        },
     }
 </script>

 <style>
 
    /* adjust slide image height */
    .slideImage {
        height: calc(100vh - 195px);
        width: 100%;
        object-fit: cover;
        object-position: 50% 50%;
    }

    @media screen (min-width: 577px)and (max-width: 767px) {
    .slideImage{
        height: calc(100vh);
        }
    }

    @media screen and (max-width: 576px) {
        .slideImage {
            height: calc(100vh - 140px);
        }
    }
 </style>
