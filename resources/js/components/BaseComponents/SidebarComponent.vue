<template>
    <div class="page">
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo-container">
                    <div class="logo-container">
                        <img class="logo-sidebar" src="../../../../public/images/samplelogo.png" />
                    </div>
                    <div class="brand-name-container">
                        <p class="brand-name">
                            Assist Link
                        </p>
                    </div>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="navigation-list">
                    <li class="navigation-list-item" v-for="(menu, index) in menues" :key="menu" v-bind:menu="menu">
                        
                        <router-link v-bind:to="{name: menu.link}">
                            <a class="navigation-link" href="#">
                                <div class="row">
                                    <div class="col-2">
                                        <p v-html="menu.icon"></p>
                                    </div>
                                    <div class="col-10 text-white">
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
                <button id="sidebarToggle" class="btn sidebarToggle" v-on:click="sidebarToggle" v-if="width<768">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div>
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

</template>

 <script>


    export default {
        props: ['menues'],
        data() {
            return {
                width: window.innerWidth,
            }
        },
        methods: {
            sidebarToggle: function() {
                let sidebarToggle = document.querySelector(".sidebarToggle");
                document.querySelector("body").classList.toggle("active");
                document.getElementById("sidebarToggle").classList.toggle("active");
            },
            resize: function() {
                this.width = window.innerWidth;
                if(this.width === 768) {
                    this.sidebarToggle();
                }
            },
            openModal() {
                var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'),{})
                logoutModal.show()
            },
            logout() {
                const modal = bootstrap.Modal.getInstance(logoutModal)
                modal.hide()
            }
        },
        mounted: function() {
            window.addEventListener('resize', this.resize)
        },
        beforeDestroy: function () {
            window.removeEventListener('resize', this.resize)
        }
    }

 </script>
 
 <style>
        ::-webkit-scrollbar {
            width: 5px;
        }

        body {
            background-color: #e6e6e6;
        }
        .page .sidebar{
            height:100vh;
            width:250px;
            background: blue;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
        }


        .page .content{
            margin-left: 250px;
        }

        .navigationBar {
            background-color: white;
            height: 50px;
            display: flex;
            padding: 38px 0px;
            align-items: center;
            box-shadow: 0 4px 2px -2px #c5c6c7;
        }

        .sidebarToggle {
            font-size: 16px;
            margin-left: -20px;
            z-index: 999;
        }

        .sidebarToggle.active {
            margin-left: 10px;
        }

        .sidebarToggle:hover{
            color: white;
        }

        .page .content .container{
            margin: 30px;
            background: #fff;
            padding: 50px;
            line-height: 28px;
        }

        body.active .page .sidebar{
            left: -250px;
        }

        body.active .page .content{
            margin-left: 0;
            width: 100%;
        }
        .sidebar-header {
            padding: 10px 20px 10px 15px;
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
            list-style-type:none;
            padding: 0px 18px;
            margin-top: 30px;
        }
        .navigation-list-item {
            padding: 12px 18px 12px 25px;
            margin: 15px 0px;
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
       
    </style>
