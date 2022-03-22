<template>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container ">
      <div class="col-md-10 col-sm-8 col-xs-6 order-1 flex-nowrap">
        <router-link v-bind:to="{name: 'Home'}">
          <a class="navbar-logo " href="#"><img src="../../../../public/images/AssistLink-logos.jpeg" alt="logo" id="brand-logo" v-if="width>=350"></a>
        </router-link>
        
        <router-link v-bind:to="{name: 'Home'}">
          <a class="navbar-title" href="#">Assist Link</a>
        </router-link>
      </div>
      
      <div class="col-md-2 col-sm-2 col-xs-3 order-2">
        <a class="btn btn-outline-primary" href="#" v-on:click="openModal()">Log in</a>
      </div>
      
      <div class="col-sm-2 col-xs-3 order-3">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#Navbar" 
        aria-controls="Navbar" aria-expanded="false" aria-label="switch navigation" v-if="width<768">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav me-auto mt-2 mt-md-0" v-show="width<768">
          <li class="nav-item" v-for="(item) in navigation" :key=item>
            <a class="nav-link" v-bind:href="item.num">{{item.title}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="nav-scroller py-1 mb-2 bg-light" v-if="width>=768">
    <nav class="nav d-flex justify-content-around">
      <a class="p-2 link-secondary" v-bind:href="item.num" v-for="(item) in navigation" :key=item>{{item.title}}</a>
    </nav>
  </div>


<!-- Modal -->
  <div class="container">
        <div class="modal fade" data-backdrop="static" id="loginModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Log in</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                      <form v-on:submit.prevent="login">
                        <div class="mb-3">
                          <label class="form-label required">Username</label>
                          <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Password</label>
<<<<<<< HEAD
                          <input type="password" class="form-control" name="password">
=======
<<<<<<< HEAD
                          <input type="password" class="form-control" name="password">
=======
<<<<<<< HEAD
                          <input type="password" class="form-control" name="password">
=======
<<<<<<< HEAD
<<<<<<< HEAD
                          <input type="password" class="form-control" name="password">
=======
                          <input type="text" class="form-control" name="password">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                          <input type="text" class="form-control" name="password">
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="submit" class="btn btn-primary">Login</button>
                        </div> 
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
 </template>
 
 <script>
 import LoginFormComponent from '../BaseComponents/LoginFormComponent'
 import axios from 'axios'
 import Router from 'vue-router'

    export default {
        data () {
          return {
            navigation: [
              {
                title: "Welcome",
                num: "#imageslide"
              },
              {
                title: "About Us",
                num: "#AboutUs"
              },
              {
                title: "Register",
                num: "#SelfRegister"
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
              },
              {
                title: "Contribution",
                num: "#Contribution"
<<<<<<< HEAD
=======
=======
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
              },
              {
                title: "FAQ",
                num: "#FAQ"
              },
              {
                title: "Sponsors",
                num: "#Sponsors"
              },
              {
                title: "Site Map",
                num: "#footer"
              }
           ],
           width: window.innerWidth,
           usesrname: "",
           password: ""
         }
       },

      components: {
        'loginform-component': LoginFormComponent
      },
      methods: {
        resize: function() {
        this.width = window.innerWidth;
        },
        openModal() {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'),{})
            loginModal.show()
        },
        login() {

          const {username,password} = Object.fromEntries(new FormData(event.target));
          this.username = username;
          this.password = password;

          const check = {
            username: this.username,
            password: this.password
          }


          axios.post('/loginOrgRep',check).then(response => {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
                    
            console.log(response.data);
            if(response.data == 1) {
              const modal = bootstrap.Modal.getInstance(loginModal)
              modal.hide()
              
              this.$router.push({
                name: 'Admin', 
              });
              
            }else if(response.data == 2){

              const modal = bootstrap.Modal.getInstance(loginModal)
              modal.hide()
            
              this.$router.push({
                name: 'OrganizationRep', 
              });

            }else if(response.data == 3) {
              alert("Applicant account is not available");
              return null;
            }else {
              alert("username and password are wrong !");
              return null;
            }
          });

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
                    if(response.data == "admin") {
                      document.cookie = 'type=admin';
                      
                      const modal = bootstrap.Modal.getInstance(loginModal)
                      modal.hide()

                      this.$router.push('/admin')

                    }else if(response.data != 0) {
                      document.cookie = 'type=orgrep';
                      document.cookie = 'orgID=' + response.data[0].OrganizationorgID

                      const modal = bootstrap.Modal.getInstance(loginModal)
                      modal.hide()
                     
                      this.$router.push({
                        name: 'OrganizationRep', 
                        params: { orgID:response.data[0].OrganizationorgID }
                      });
                    }else {
                      alert("username and password are wrong !");
                      return null;
                    }
                });

            //
>>>>>>> ce287262850a4b18030f7c8e24f2feb8115460eb
<<<<<<< HEAD
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
=======
>>>>>>> dc931297d3b9246f93ddf24b8b901b6cb438911b
>>>>>>> 4fcbc3d8b747cdff8de0cba84fb4db6e5c72b74d
>>>>>>> 0dd33233c80f93b4d4a8b8254b12ecbbf4b6b05e
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
 .order-2{
   text-align: right;
 }
 .order-3 {
   text-align: right;
 }

/* to display humburger menu under the nav */
 .navbar-collapse {
   order: 3;
 }
 
 #brand-logo {
   margin-right: 10px;
   max-width: 100px;
   width: 100%;
 }

/* Modal style*/
  .modal-header {
      background: rgb(25, 0, 255);
      color: white;
  }

  .required:after {
      content: "*";
      color: red;
  }


  //For responsive header
  @media screen and (max-width: 576px) {
    .navbar-title{
      font-size: 16px;  
    }

    #brand-logo {
      width: 10px;
      height: 10px;
    }
    .btn {
      font-size:25px;
      padding:4px 6px;
    }

  }

 @media screen and (min-width: 577px) and (max-width: 767px) {
    .navbar-title{
      font-size: 36px;  
    }

    #brand-logo {
      max-width: 25%;
      max-height: 25%;
    }

    .btn {
      font-size:15px;
      padding:4px 6px;
    }
 }

 @media screen and (min-width: 768px) {
    .navbar-title{
          font-size: 36px;   
    }
  }

 </style>