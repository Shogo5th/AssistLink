
 window.bootstrap = require('bootstrap')


 import { createApp } from 'vue';
 import * as Vue from 'vue'

 import { createRouter, createWebHistory } from 'vue-router'
 import HomeComponent from "./components/HomeComponent";
 import AdminComponent from "./components/AdminCOmponent";
 import ManageOrganizationComponent from "./components/ManageOrganizationComponent";
 import RecordOrgRepComponent from "./components/RecordOrgRepComponent";
 import RecordOrganizationComponent from "./components/RecordOrganizationComponent";
 import OrganizationRepComponent from "./components/OrganizationRepCOmponent";
 import viewApplicantsComponent from "./components/ViewApplicantsComponent";
 import AddApplicantComponent from "./components/AddApplicantComponent";
 import UploadDocumentComponent from "./components/UploadDocumentComponent";
 import SelfAddApplicantComponent from "./components/SelfAddApplicantComponent";
 import SelfUploadDocumentComponent from "./components/SelfUploadDocumentComponent";
<<<<<<< HEAD
 import OrganizeAidAppealComponent from "./components/OrganizeAidAppealComponent";
 import AddAppealComponent from "./components/AddAppealComponent";
 import AllOrganizationsComponent from "./components/AllOrganizationsComponent";
 import AppealDetailComponent from "./components/AppealDetailComponent";
 import ViewAppealComponent from "./components/ViewAppealComponent";
 import SelfContributionComponent from "./components/SelfContributionComponent";
=======
<<<<<<< HEAD
<<<<<<< HEAD
 import OrganizeAidAppealComponent from "./components/OrganizeAidAppealComponent";
 import AddAppealComponent from "./components/AddAppealComponent";
 import AllOrganizationsComponent from "./components/AllOrganizationsComponent";
 
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d

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
    },
    {
        path:'/orgrep',
        name:'OrganizationRep',
        component: OrganizationRepComponent
    },
    {
        path:'/orgrep/register_applicant',
        name:'viewApplicants',
        component: viewApplicantsComponent
    },
    {
        path:'/orgrep/register_applicant/add_applicant',
        name:'NewApplicant',
        component: AddApplicantComponent
    },
    {
        path:'/orgrep/register_applicant/add_applicant/upload_document',
        name:'uploadDocument',
        component: UploadDocumentComponent
    },
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
        path:'/orgrep/organize_aid_appeal',
        name:'organizeAidAppeal',
        component: OrganizeAidAppealComponent
    },
    {
<<<<<<< HEAD
        path:'/orgrep/organize_aid_appeal/add_new_appeal',
=======
        path:'/orgrep/organize_aid_appeal',
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
        name:'NewAppeal',
        component: AddAppealComponent
    },
    {
        path:'/applicant/view_all_organi',
        name:'viewAllOrganizations',
        component: AllOrganizationsComponent
        
    },
    {
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
        path:'/applicant/selft_register',
        name:'SelfRegister',
        component: SelfAddApplicantComponent
    },
    {
        path:'/applicant/selft_register/self_upload_document',
        name:'SelfUpload',
        component: SelfUploadDocumentComponent
<<<<<<< HEAD
    },
    {
        path:'/donor/view_appeal',
        name:'ViewAppeal',
        component: ViewAppealComponent
    },
    {
        path:'/donor/view_appeal/appeal_detail',
        name:'AppealDetail',
        component: AppealDetailComponent
    },
    {
        path:'/donor/view_appeal/appeal_detail/self_contribution',
        name:'SelfContribution',
        component: SelfContributionComponent

=======
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
    }
]


const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router


 
 app.use(router).mount('#app')