
<template> 
    <sidebar-component v-bind:menues="_menues">
        
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Hello Admin</h1>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h5 class="text-center">Please Select Menu </h5>
                        </div>
                    </div>
                </div>
            </section>
        </div>
       

    </sidebar-component>


</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import axios from 'axios'
    

    export default {
        data() {
            return {
                _menues: [
                    {
                        name: "Manage Organization",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "ManageOrg"
                    }

                ]
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        }
    }

</script>
