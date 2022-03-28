<template>
<div>
    <div class="page">
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="../../../../public/images/AssistLink-logos.jpeg" />
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name text-nowrap">
                            Assist Link
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item" v-for="(menu) in menues" :key="menu" v-bind:menu="menu">
                        <router-link v-bind:to="{name: menu.link}">
                            <a class="navigation-link" href="#">
                                <div class="row" id="item-icon">
                                    <div class="col-2">
                                        <p class="menu-icon" v-html="menu.icon"></p>
                                       
                                    </div>
                                    <div class="col-10 text-white menu-title">
                                        {{menu.name}}
                                    </div>
                                </div>
                            </a>
                        </router-link>
                    </li>
                </ul>

            </div>
        </div>
        <div class="content">
            <div class="navigationBar mb-3">
                <div id="logoutbutton">
                    <a class="btn btn-outline-primary" href="#" v-on:click="openModal()">Log out</a>
                </div>
            </div>

            <slot></slot>
        </div>
        
    </div>

    <!-- Modal -->
    <div class="container">
        <div class="modal fade" id="logoutModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Log out</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title">Are you sure to log out?</h4>
                    </div>
                    <div class="modal-footer justify-content-center">
                    <router-link v-bind:to="{name: 'Home'}">
                        <button type="button" class="btn btn-danger" v-on:click="logout()">Logout</button>
                    </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
</div>
</template>

 <script>
    import axios from 'axios'

    export default {
        props: ['menues'],
        data() {
            return {

            }
        },
        methods: {
            openModal() {
                var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'),{})
                logoutModal.show()
            },
            logout() {

                 axios.get('/logout')
                    .then(response => {
                        console.log('logout');
                    });
                const modal = bootstrap.Modal.getInstance(logoutModal)
                modal.hide()
            }
        }
    }

 </script>
 
 <style>

        body {
            background-color: #e6e6e6;
        }
        .page {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        .menu-title {
            display: none;
        }
               
        .page .sidebar {
            z-index: 1;
            background: blue;
            order: 2;
            position: sticky;
            display: flex;
            bottom: 0;
            height: 52px;
            left: 0;
            right: 0;
            align-items: center;
            justify-content: space-between;

        }

        .page .content {
            flex: 75%;
            order: 1;
        }

        .navigationBar {
            background-color: white;
            height: 50px;
            display: flex;
            padding: 38px 0px;
            align-items: center;
            box-shadow: 0 4px 2px -2px #c5c6c7;
            justify-content: space-between;
        }

        .page .content .container{
            margin: 30px;
            background: #fff;
            padding: 50px;
            line-height: 28px;
        }

        .sidebar-header {
            display: none;
            order: 2;
        }

        .sidebar-body {
            width: 100%;
            order: 1;
            height: 52px;
        }

        .sidebar-logo-container {
            display: flex;
        }

        .logo-container {
            max-width:30%;
        }

        .brand-name-container {
            margin: 20px 0px 0px 15px;
            padding: 0px;
        }

        .logo-sidebar {
            width: 100%;
            height: auto;
        }

        .brand-name {
            color: white;
            margin: 0px;
            line-height: 1.1rem; 
            font-size: 24px;
            letter-spacing: 1px;
        }

        .navigation-list {
            display: flex;
            justify-content: space-around;
            list-style-type:none;
            height: 100%;
            align-items: center;
        }
        .navigation-list-item {
            border-radius: 8px;
            
        }
        .navigation-list-item:hover {
            background: rgb(0, 0, 0, 0.05);
            box-shadow: 0 0 0.4em rgb(255, 255, 255, 0.1);
            cursor: pointer;
        }
        .navigation-list-item.active {
            background: rgb(0, 0, 0, 0.1);
            box-shadow: 0 0 0.4em rgb(255, 255, 255, 0.1);
        }
        .navigation-link {
            color: rgb(31, 40, 51, 0.8);
            letter-spacing: 0.5px;
            font-weight: 400;
            text-decoration: none;
            font-size: 18px;
        }
        .navigation-link i {
            font-size: 18px;
        }
        .navigation-list-item:hover .navigation-link {
            color: rgb(255, 255, 255, 0.7);
        }
        .navigation-list-item.active .navigation-link {
            color: rgb(255, 255, 255, 0.8);
            font-weight: 500;
        }

        #logoutbutton {
            margin-right: 20px;
            margin-left:auto;
        }

        #item-icon {
            align-items: center;
            justify-content: center;
        }

        p.menu-icon{
            margin: 0;
            color: white;
        }

    @media only screen and (min-width: 600px){
        .page .sidebar {
            position: sticky;
        }
    }

    @media only screen and (min-width: 769px){

        .page {
            flex-direction: row;
        }

        .page .sidebar {
            display: block !important;
            position: unset;
            height: 100vh;
            order: 1;
            width: 250px;
        }

        .sidebar-header {
            display: block;
            padding: 10px 20px 10px 15px;
        }

        .navigation-list{
            flex-direction: column;
            padding: 0px 18px;
            margin-top: 30px;

            height: auto;
            
        }

        .menu-title {
            display: block;
        }

        .navigation-list-item {
            padding: 12px 18px 12px 25px;
            margin: 15px 0px;
        }

        .page .sidebar {
            display: block !important;
            position: sticky;
            align-self: flex-start;
            height: 100vh;
            top: 0;
            /* bottom: 0; */
            order: 1;
            width: 250px;
        }

        .sidebar-body {
            height: auto;
        }

        .page {
            height: 100%;
        }

        .navigationBar {
            background-color: white;
            height: 50px;
            display: flex;
            top: 0;
            z-index: 1;
            position: sticky;
            padding: 38px 0px;
            align-items: center;
            box-shadow: 0 4px 2px -2px #c5c6c7;
            justify-content: space-between;
        }

    }
        
    </style>
