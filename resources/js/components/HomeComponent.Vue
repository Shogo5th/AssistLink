<template>
    <main>
        <!-- content 1 Image Slide-->
        <div class="py-4" id="content1">
            <section>
                <div class="container">
                    <div class="row mt-5 mb-5">
                        <div id="slideCaprition" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#slideCaprition" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#slideCaprition" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#slideCaprition" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../../../public/images/sampleslideimage.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../public/images/sampleslideimage.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="../../../public/images/sampleslideimage.png" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
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
                        <div class="col-md-5 order-md-1  text-center">
                        <img class="img-fluid" src="../../../public/images/samplelogo.png" alt="sample image">
                        </div>
                        <div class="col-md-7 order-md-3 my-auto">

                            <h1 class="text-center mb-3 ">About Us</h1>
                            <p class="text-break">
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                                Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text
                            </p>
                            <div class="text-center">
                                <a class="btn btn-danger btn-lg" href="#" role="button">Read More</a>
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
                    <div class="row mt-3">
                        <div class="col-md-12 order-md-1  p-5">
                            <h1 class="text-center  mb-5">Frequently Asked Questions</h1>
                            
                            
                            <!-- FAQ Accordions -->
                            <div class="accordion" id="QuestionsAccordion">
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
                            </div> 
                            <!-- FAQ Accordions -->

                            <!-- Read More button -->
                            <div class="text-center">
                                <a class="btn btn-danger btn-lg mt-3" href="#" role="button">Read More</a>
                            </div>

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
                    <div class="row mt-3">
                        <div class="col-md-12 order-md-1  p-5">
                            <h1 class="text-center  mb-5">Sponsors</h1>
                        </div>
                    </div>

                    
                    <div class="row mt-3">

                        <div class="col-lg-4 col-sm-6 order-md-1  p-5" v-for="(sponsor,index) in sponsors" :key=sponsor>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-3">
                                        <img v-bind:src= "sponsor.img" alt="SponsorImage" class="align-middle">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ sponsor.name}}</h5>
                                            <p class="card-text">{{ sponsor.description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          
                    </div>
                </div>
            </section>
        </div>
        <!-- content 4 -->

   </main>
</template>
 
 <script>
     export default {
         data() {
             return {

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
         }
     }
 </script>