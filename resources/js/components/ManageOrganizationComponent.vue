
<template> 
    <sidebar-component v-bind:menues="_menues">
        <!-- Organization Cards -->
        <div class="py-4">
            <section>
                <div class="container-fluid" id="box">
                    <div class="row mb-3">
                        <div class="col-md-12 order-md-1  p-2">
                            <h1 class="text-center">Organizations</h1>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3" v-for="(org) in organizations" :key=org>
                            <div class="card mb-3 shadow" style="max-width: 540px;">
                                <div class="card-header">
                                    <h4>ID:{{org.orgID}}</h4>
                                </div>
                                <div class="card-body mb-3">
                                    <h5 class="card-title">{{org.orgName}}</h5>
                                    <p class="card-text">{{org.address}}</p>
                                    <router-link v-bind:to="{name: 'NewOrgRep',params:{name: org.orgName, id: org.orgID}}">
                                         <a href="#" class="btn btn-primary">Add Representative</a>
                                    </router-link>

                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-4 col-sm-6 order-md-1  p-3">
                            <div class="card shadow">
                                <div class="card-body mb-4">
                                    <div class="text-center mt-3">
                                        <h4>Add Organization</h4>
                                        <router-link v-bind:to="{name: 'NewOrg'}">
                                            <a href="#" class="mt-3 plus" style="font-size: 38px;"><i class="fa-solid fa-circle-plus"></i></a>
                                        </router-link>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Organization Cards -->

    </sidebar-component>


</template>

<script>
    import SidebarComponent from './BaseComponents/SidebarComponent'
    import axios from 'axios'
    

    export default {
        data() {
            return {
                organizations: [],
                _menues: [
                    {
                        name: "Manage Organization",
                        short: "Organization",
                        icon: "<i class='fa-solid fa-building-ngo'></i>",
                        link: "ManageOrg"
                    }

                ]
            }
        },
        components: {
            'sidebar-component' : SidebarComponent
        },
        
        created() {

            axios.get('/loginCheck')
                .then(response => {

                    if(response.data == 'none') {
                            this.$router.push({
                            name: 'Home'
                        });
                    }else if(response.data != 'admin'){
                        this.$router.push({
                            name: 'OrganizationRep'
                        });
                    }else {
                        axios.get('/api/getorg')
                            .then(response => {
                                this.organizations = response.data;
                        });
                    }
            });
        },
        methods: {
        }
    }

</script>
