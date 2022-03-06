
 window.bootstrap = require('bootstrap')


 import { createApp } from 'vue';
 import * as Vue from 'vue';
 //import * as VueRouter from 'vue-router';
 import { createRouter, createWebHistory } from 'vue-router'
 import HomeComponent from "./components/HomeComponent";
 import AdminComponent from "./components/AdminCOmponent";
 import ManageOrganizationComponent from "./components/ManageOrganizationComponent";
 import RecordOrgRepComponent from "./components/RecordOrgRepComponent";
 import RecordOrganizationComponent from "./components/RecordOrganizationComponent";

 const app = createApp({})
 
 

 // set link
const routes = [
    {
        path:'/',
        name: 'Home',
        component: HomeComponent
    },
    {
        path:'/admin',
        name:'Admin',
        component: AdminComponent
    },

    {
        path:'/admin/manage_organization',
        name:'ManageOrg',
        component: ManageOrganizationComponent
    },
    {
        path:'/admin/manage_organization/record_org_rep',
        name:'NewOrgRep',
        component: RecordOrgRepComponent
    },
    {
        path:'/admin/manage_organization/record_org',
        name:'NewOrg',
        component: RecordOrganizationComponent
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router


 
 app.use(router).mount('#app')