<template>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <div class="col-md-10 col-sm-8 col-xs-6 order-1 flex-nowrap">
        <a class="navbar-logo " href="#"><img src="../../../../public/images/samplelogo.png" alt="logo" id="brand-logo" v-if="width>=350"></a>
        <a class="navbar-title" href="#">Assist Link</a>
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
          <li class="nav-item" v-for="(item,index) in navigation">
            <a class="nav-link" v-bind:href="item.num">{{item.title}}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="nav-scroller py-1 mb-2" v-if="width>=768">
    <nav class="nav d-flex justify-content-around">
      <a class="p-2 link-secondary" v-bind:href="item.num" v-for="(item,index) in navigation">{{item.title}}</a>
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
                      <form>
                        <div class="mb-3">
                          <label class="form-label required">Name</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label class="form-label required">Email</label>
                          <input type="email" class="form-control">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer justify-content-center">
                      <router-link v-bind:to="{name: 'Admin'}">
                        <button type="submit" class="btn btn-primary" v-on:click="login()">Login</button>
                      </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
 </template>
 
 <script>
 import LoginFormComponent from '../BaseComponents/LoginFormComponent'
    export default {
        data () {
          return {
            navigation: [
              {
                title: "Welcome",
                num: "#content1"
              },
              {
                title: "About Us",
                num: "#content2"
              },
              {
                title: "FAQ",
                num: "#content3"
              },
              {
                title: "Sponsors",
                num: "#content4"
              },
              {
                title: "Site Map",
                num: "#footer"
              }
           ],
           width: window.innerWidth
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
            const modal = bootstrap.Modal.getInstance(loginModal)
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


\* For responsive header*\
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