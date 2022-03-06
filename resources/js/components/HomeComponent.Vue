<template>
    <gototop-component></gototop-component>
    <main>
        <header-component></header-component>
        <!-- content 1 Carousel-->
        <div class="py-4" id="content1">
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
            <div class="py-4 bg-light" id="content2">
                <section>
                    <div class="container">
                        <div class="row mt-5 mb-5">
                            <h1 class="text-center mb-5 ">About Us</h1>
                            
                            <div class="col-md-5 mb-5 text-center">
                                <animation-component>
                                    <img class="img-fluid" src="../../../public/images/samplelogo.png" alt="sample image">
                                </animation-component>
                            </div>
                            <div class="col-md-7 mb-5 my-auto">
                                <animation-component>
                                    <p class="text-break">
                                        Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                        Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                        Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                        Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                    </p>
                                </animation-component>
                                <div class="text-center mt-5">
                                    <animation-component>
                                        <a class="btn btn-lg btn-outline-primary mt-3" href="#" role="button">Read More</a>
                                    </animation-component>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        <!-- content 2 -->

        <!-- content 3 FAQ -->
        <div class="py-4" id="content3">
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

                            <!-- Read More button -->
                            <animation-component>
                                <div class="text-center mt-5">
                                    <a class="btn btn-lg btn-outline-primary" href="#" role="button">Read More</a>
                                </div>
                            </animation-component>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- content 3 -->

        <!-- content 4  Sponsors -->
        <div class="py-4" id="content4">
            <section>
                <div class="container" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center ">Sponsors</h1>
                        </div>
                    </div>

                        
                    <div class="row mb-5">
                        
                        
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(sponsor,index) in sponsors" :key=sponsor>
                        <animation-component>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-5">
                                        <img v-bind:src= "sponsor.img" alt="SponsorImage" class="align-middle">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ sponsor.name}}</h5>
                                            <p class="card-text">{{ sponsor.description }}</p>
                                        </div>
                                    </div>
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
                        img:require('../../../public/images/sampleslideimage.png').default,
                        description: "<h5>Text Text Text Text</h5>"
                    },
                                        {
                        img:require('../../../public/images/sampleslideimage.png').default,
                        description: "<h5>Text Text Text Text</h5>"
                    },
                    {
                        img:require('../../../public/images/sampleslideimage.png').default,
                        description: "<h5>Text Text Text Text</h5>"
                    },
                    {
                        img:require('../../../public/images/sampleslideimage.png').default,
                        description: "<h5>Text Text Text Text</h5>"
                    }

                ],

                faqs: [
                    {
                        question: "Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ?",
                        answer: "<Strong>Text Text Text Text Text</strong>Text Text Text Text TextText Text Text Text TextText Text Text Text Text"
                    },
                    {
                        question: "Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ?",
                        answer: "<Strong>Text Text Text Text Text</strong>Text Text Text Text TextText Text Text Text TextText Text Text Text Text"
                    },
                    {
                        question: "Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ?",
                        answer: "<Strong>Text Text Text Text Text</strong>Text Text Text Text TextText Text Text Text TextText Text Text Text Text"
                    },
                    {
                        question: "Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text ?",
                        answer: "<Strong>Text Text Text Text Text</strong>Text Text Text Text TextText Text Text Text TextText Text Text Text Text"
                    }

                 ],
                 sponsors:[
                    {
                        name:"Sponsor 1", 
                        description:"Text Text Text Text Text Text Text Text Text",
                        img: require('../../../public/images/samplelogo.png').default
                    },
                    {
                        name:"Sponsor 2", 
                        description:"Text Text Text Text Text Text Text Text Text",
                        img: require('../../../public/images/samplelogo.png').default
                    },
                    {
                        name:"Sponsor 3", 
                        description:"Text Text Text Text Text Text Text Text Text",
                        img: require('../../../public/images/samplelogo.png').default
                    },
                    {
                        name:"Sponsor 4", 
                        description:"Text Text Text Text Text Text Text Text Text",
                        img: require('../../../public/images/samplelogo.png').default
                    }
                    
                 ]
                 
             }
        },
        components: {
            'animation-component' : AnimationComponent,
            'header-component' : HeaderComponent,
            'footer-component' : FooterComponent,
            'gototop-component' : GotoTopComponent
        }
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