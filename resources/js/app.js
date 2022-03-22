
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
 import OrganizeAidAppealComponent from "./components/OrganizeAidAppealComponent";
 import AddAppealComponent from "./components/AddAppealComponent";
 import AllOrganizationsComponent from "./components/AllOrganizationsComponent";
 import AppealDetailComponent from "./components/AppealDetailComponent";
 import ViewAppealComponent from "./components/ViewAppealComponent";
 import SelfContributionComponent from "./components/SelfContributionComponent";
 import RecordContributionComponent from "./components/RecordContributionComponent";
 import AddContributionComponent from "./components/AddContributionComponent";


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
        path:'/orgrep/organize_aid_appeal',
        name:'organizeAidAppeal',
        component: OrganizeAidAppealComponent
    },
    {
        path:'/orgrep/organize_aid_appeal/add_new_appeal',
        name:'NewAppeal',
        component: AddAppealComponent
    },
    {
        path:'/orgrep/record_contribution',
        name:'recordContribution',
        component: RecordContributionComponent
    },
    {
        path:'/orgrep/record_contribution/add_contribution',
        name:'NewContribution',
        component: AddContributionComponent
    },
    {
        path:'/applicant/view_all_organi',
        name:'viewAllOrganizations',
        component: AllOrganizationsComponent
        
    },
    {
        path:'/applicant/selft_register',
        name:'SelfRegister',
        component: SelfAddApplicantComponent
    },
    {
        path:'/applicant/selft_register/self_upload_document',
        name:'SelfUpload',
        component: SelfUploadDocumentComponent
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

    }
]


const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router


 
 app.use(router).mount('#app')