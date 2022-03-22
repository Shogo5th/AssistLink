<template>
    <animation-component>
    <section class="">
        <!-- Footer -->
        <footer class="bg-secondary text-white text-center text-md-start mt-5" id="footer">
            <!-- Grid container -->
            <div class="container p-4">
            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 col-lg-6 col-xl-6 mx-auto mb-4">
                    <h2>Site Map</h2>

                    <ul class="list-unstyled mb-0">
                        <li  v-for="(list,index) in maplist">
                        <p v-html="list.link"></p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-lg-6 col-xl-6 mx-auto mb-4">

                <img src="../../../public/images/samplelogo.png" alt="logo" class="align-middle">

                <h5 class="mt-3">Contact Information</h5>

                <table class="table text-white">
                <tbody>
                    <tr>
                    <td>Email</td>
                    <td>AssistLink@mail.com</td>
                    </tr>
                    <tr>
                    <td>Phone</td>
                    <td>000-000-000</td>
                    </tr>
                </tbody>
                </table>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <a class="text-white" href="#">© 2022 Copyright: AssistLink.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </section>
    </animation-component>
</template>

<script>
    import AnimationComponent from './AnimationComponent'
    export default {
        data() {
            return {
                maplist : [
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>Manage Organization</a>"
                    },
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>Register Applicant</a>"
                    },
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>Organize Aid Appeal</a>"
                    },
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>Record Contribution</a>"
                    },
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>About Us</a>"
                    },
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>View Appeals</a>"
                    },
                    {
                        link: "<a href='#' class='text-white text-decoration-none'>Record Aid Disbursement</a>"
                    },
                    {
                        link:"<a href='#' class='text-white text-decoration-none'>FAQ</a>"
                    }

                ]
            }
        },
        components: {
            'animation-component' : AnimationComponent
        }
    }
</script>