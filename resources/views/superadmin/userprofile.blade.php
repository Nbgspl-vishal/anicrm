
@extends('superadmin.layout.superadmin')

@section('title')
Profile
@stop

@section('content')
   <!-- END: SideNav-->
   <!-- BEGIN: Page Main-->
   <div id="main">
      <div class="row">
         <div class="admin-header user-header">
            <div class="col s12">
               <h4 class="admin-heading username-head">{{Auth::user()->name}}</h4>
            </div>
         </div>
         <div class="col s12">
            <div class="container">
               <div class="section">
                  <div class="col s12 m4 l3 user-section-negative-margin">
                     <div class="row">
                        <div class="col s12 center-align">
                           <img class="responsive-img circle z-depth-3" id="sAdminprofile" src="{{'assets/user/'.Auth::user()->profile_image}}" alt="">
                        </div>
                     </div>
                  </div><br><br>
                  <div class="profile-tab-section">
                     <div class="tab-content-sections tab-container">
                        <div class="profile-tab-content tab-child" id="pdt" style="display:block;">
                           <div class="card">
                              <div class="card-head">
                                 Details
                                 <div class="right-head">
                                    <span><button class="btn edit-it"><i class="fa fa-edit"></i>Edit</button></span>
                                    <span><button class="btn save-it" id="myButton">Save</button></span>
                                    <span><button class="btn cancel-it">Cancel</button></span>
                                 </div>
                              </div>
                              <div class="card-content">
                                 <div class="col s12">
                                    <form action="{{url('getprofile')}}" method="post" id="myForm" enctype="multipart/form-data">
                                       @csrf
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Name</label>
                                          <p>{{Auth::user()->name}}</p>
                                          <input type="text" name="name" value="{{Auth::user()->name}}" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Email</label>
                                          <p>{{Auth::user()->email}}</p>
                                          <input type="text" name="email" disabled="" value="{{Auth::user()->email}}" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Mobile</label>
                                          <p>{{Auth::user()->mobile}}</p>
                                          <input type="text" name="mobile" value="{{Auth::user()->mobile}}" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Telephone</label>
                                          <p>{{(Auth::user()->telephone)}}</p>
                                          <input type="text" name="telephone" value="{{(Auth::user()->telephone)}}" />
                                       </div>
                                       <div class="input-field col l6 m6 s12">
                                          <label for="" class="">Address</label>
                                          <p>{{Auth::user()->company_name}}</p>
                                          <input type="text" name="company_name" value="{{Auth::user()->company_name}}" />
                                          <p>{{Auth::user()->area}}</p>
                                          <input type="text" name="area" value="{{Auth::user()->area}}" />
                                          <p>{{Auth::user()->city}}</p>
                                          <input type="text" name="city"   value="{{Auth::user()->city}}" />
                                          <p>{{Auth::user()->country}}</p>
                                          <input type="text" name="country" value="{{Auth::user()->country}}" />
                                          <p>{{Auth::user()->zip_code}}</p>
                                          <input type="text" name="zip_code" value="{{Auth::user()->zip_code}}" />
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <p style="border: 0;">Change Profile Picture</p>
                                          <input type="file" name="profile_image" style="display: block !important; margin-top: 10px;" />
                                       </div>
                                    </form>
                                 </div>
                                 <!-- <div class="col s12 m8 account-type">
                                    <h5>Account type</h5>
                                    <form>
                                       <div class="input-field col s12">
                                          <h5 class="sub-head">Mobile</h5>
                                          <input type="checkbox" class="checkbox" />
                                          <label>Mobile Login</label>
                                       </div>
                                       <div class="input-field col s12">
                                          <h5 class="sub-head">Desktop</h5>
                                          <input type="checkbox" class="checkbox" />
                                          <label>View billing</label>
                                          <input type="checkbox" class="checkbox" />
                                          <label>Administrator</label>
                                          <input type="checkbox" class="checkbox" />
                                          <label>Costing user</label>
                                          <input type="checkbox" class="checkbox" />
                                          <label>Job desk user</label>
                                       </div>
                                       <div class="permission-box">
                                          <div class="input-field col s12 m6">
                                             <p><b>Permission</b></p>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Select All</label><br>
                                             <hr>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Business</label><br>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Libraries</label><br>
                                             <input type="checkbox" class="checkbox" />
                                             <label>User staff</label><br>
                                          </div>
                                          <div class="input-field col s12 m6">
                                             <p><b>Advanced Permission</b></p>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Select All</label><br>
                                             <hr>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Asset-Delete</label><br>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Asset-Delete <br>Private attachment</label><br>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Asset-Delete <br> Private notes</label><br>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Company - clear data</label><br>
                                             <input type="checkbox" class="checkbox" />
                                             <label>Company - documentaion delete</label><br>
                                          </div>
                                       </div>
                                    </form>
                                 </div> -->
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
   <!-- BEGIN: Footer-->
@stop
 @section('footer')
 <script type="text/javascript">
     $(document).ready(function() {
       $("#myButton").click(function() {
           $("#myForm").submit();



       });
    });
 </script>
 @stop