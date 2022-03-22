
<template> 
    <sidebar-component v-bind:menues="_menues">
        
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Welcom Admin</h1>
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
    import Router from 'vue-router'

    export default {
        data() {
            return {
                _menues: [
                    {
                        name: "Manage Organization",
                        short: "Organization",
                        icon: "<i class='fas fa-calendar-alt'></i>",
                        link: "ManageOrg"
                    }

                ]
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        methods: {
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
        mounted: function () {
        }
    }

</script>
