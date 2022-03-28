
 window.bootstrap = require('bootstrap')

 import '@fortawesome/fontawesome-free/css/all.css'
 import '@fortawesome/fontawesome-free/js/all.js'



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
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
 import OrganizeAidAppealComponent from "./components/OrganizeAidAppealComponent";
 import AddAppealComponent from "./components/AddAppealComponent";
 import AllOrganizationsComponent from "./components/AllOrganizationsComponent";
 import AppealDetailComponent from "./components/AppealDetailComponent";
 import ViewAppealComponent from "./components/ViewAppealComponent";
 import SelfContributionComponent from "./components/SelfContributionComponent";
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
 import RecordContributionComponent from "./components/RecordContributionComponent";
 import AddContributionComponent from "./components/AddContributionComponent";
 import RecordAidDisbursementComponent from "./components/RecordAidDisbursementComponent";
 import SelectApplicantComponent from "./components/SelectApplicantComponent"; 
 import ApplicantInfoComponent from "./components/ApplicantInfoComponent"; 
 import ViewDocumentsComponent from "./components/ViewDocumentsComponent"; 
 import AddDisbursementComponent from "./components/AddDisbursementComponent"; 
 import ViewMoreAppealComponent from "./components/ViewMoreAppealComponent"; 

<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
 import RecordContributionComponent from "./components/RecordContributionComponent";
 import AddContributionComponent from "./components/AddContributionComponent";

=======
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
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36

 const app = createApp({})
 

<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
 

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
        path:'/orgrep/organize_aid_appeal',
        name:'organizeAidAppeal',
        component: OrganizeAidAppealComponent
    },
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        path:'/orgrep/organize_aid_appeal/view_more',
        name:'viewMoreAppeal',
        component: ViewMoreAppealComponent
    },
    {
        path:'/orgrep/organize_aid_appeal/add_new_appeal',
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
        path:'/orgrep/organize_aid_appeal/add_new_appeal',
=======
<<<<<<< HEAD
        path:'/orgrep/organize_aid_appeal/add_new_appeal',
=======
        path:'/orgrep/organize_aid_appeal',
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        name:'NewAppeal',
        component: AddAppealComponent
    },
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        path:'/orgrep/record_aid_disbursement',
        name:'recordAidDisbursement',
        component: RecordAidDisbursementComponent
    },
    {
        path:'/orgrep/record_aid_disbursement/select_applicant',
        name:'selectApplicant',
        component: SelectApplicantComponent
    },
    {
        path:'/orgrep/record_aid_disbursement/select_applicant/view_applicant_info',
        name:'Applicantinfo',
        component: ApplicantInfoComponent
    },
    {
        path:'/orgrep/record_aid_disbursement/select_applicant/view_applicant_info/view_documents',
        name:"viewDocuments",
        component: ViewDocumentsComponent
    },
    {
        path:'/orgrep/record_aid_disbursement/select_applicant/view_applicant_info/add_disbursement',
        name:"addDisbursement",
        component: AddDisbursementComponent
    },
    {
        path:'/applicant/view_all_organization',
<<<<<<< HEAD
=======
=======
=======
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
        path:'/applicant/view_all_organi',
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
        name:'viewAllOrganizations',
        component: AllOrganizationsComponent
        
    },
    {
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
        path:'/applicant/selft_register',
        name:'SelfRegister',
        component: SelfAddApplicantComponent
    },
    {
        path:'/applicant/selft_register/self_upload_document',
        name:'SelfUpload',
        component: SelfUploadDocumentComponent
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

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
    }
]


<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> 07e7e6840663499c77dcfd170e364524863bddae
>>>>>>> 555f23c691a99f0f3b8e9fce4d29a20738ac7a36
const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router


 
 app.use(router).mount('#app')