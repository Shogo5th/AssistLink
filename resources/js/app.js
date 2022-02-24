 require('./bootstrap')

 import { createApp } from 'vue';
 import * as Vue from 'vue';
 //import * as VueRouter from 'vue-router';
 import { createRouter, createWebHistory } from 'vue-router'
 import HomeComponent from "./components/HomeComponent";
 import HeaderComponent from "./components/HeaderComponent";
 import FooterComponent from "./components/FooterComponent";
 const app = createApp({})
 
 //app.component('home-component',HomeComponent)
 app.component('header-component', HeaderComponent)
 app.component('footer-component', FooterComponent)


const routes = [
    {
        path:'/',
        name: 'Home',
        component: HomeComponent,FooterComponent
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router


 
 app.use(router).mount('#app')