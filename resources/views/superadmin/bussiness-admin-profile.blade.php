
@extends('superadmin.layout.superadmin')

@section('title')
Business Admin Profile
@stop

@section('content')
   <!-- END: SideNav-->
   <!-- BEGIN: Page Main-->
   <div id="main">
      <div class="row">
         <div class="admin-header user-header">
            <div class="col s12">
               <h4 class="admin-heading username-head">Bussiness Admin User</h4>
            </div>
         </div>
         <div class="col s12">
            <div class="container">
               <div class="section">
                  <div class="col s12 m4 l3 user-section-negative-margin">
                     <div class="row">
                        <div class="col s12 center-align">
                           <img class="responsive-img circle z-depth-5" width="120" src="../app-assets/images/user/12.jpg" alt="">
                        </div>
                     </div>
                  </div><br><br>
                  <div class="profile-tab-section">
                     <div class="tab-content-sections tab-container">
                        <div class="profile-tab-content tab-child" id="pdt" style="display:block;">
                           <div class="card">
                              <div class="card-head">
                                 Details
                                 <!-- <div class="right-head">
                                    <span><button class="btn edit-it"><i class="fa fa-edit"></i>Edit</button></span>
                                    <span><button class="btn save-it">Save</button></span>
                                    <span><button class="btn cancel-it">Cancel</button></span>
                                 </div> -->
                              </div>
                              <div class="card-content">
                                 <div class="col s12">
                                    <form>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Name</label>
                                          <p>Test Name</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Email</label>
                                          <p>abc@gmail.com</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Mobile</label>
                                          <p>9876543456</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Telephone</label>
                                          <p>9876554566</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col m12">
                                          <label for="" class="">Address</label>
                                       </div>
                                       <div class="input-field col 16 m6 s12">
                                          <p>Company name</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col 16 m6 s12">
                                          <p>Area</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col 16 m6 s12">
                                          <p>City</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col 16 m6 s12">
                                          <p>Country</p>
                                          <input type="text" />
                                       </div>
                                       <div class="input-field col 16 m6 s12">
                                          <p>Zip code</p>
                                          <input type="text" />
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-child" id="pdt" style="display:block;">
                           <div class="card">
                              <div class="card-head">
                                 User Login Info
                              </div>
                              <div class="card-content">
                                 <div class="col s12">
                                    <form>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">User Id</label>
                                          <input type="email" name="" value="testuser123@gmail.com">
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Password</label>
                                          <input type="password" name="" id="password" value="example123">
                                          <i class="fa fa-eye" id="togglePassword"></i>
                                       </div>
                                       <div class="form-submit">
                                          <button class="btn">Save Change</button>
                                          <a href="{{url('bussiness-admin')}}" class="btn">Cancel</a>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="content-overlay"></div>
         </div>
      </div>
   </div>
   <!-- END: Page Main-->
  @stop
  @section('footer')
   <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');

      togglePassword.addEventListener('click', function (e) {
       // toggle the type attribute
       const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
       password.setAttribute('type', type);
       // toggle the eye slash icon
       this.classList.toggle('fa-eye-slash');
   });
   </script>
   @stop