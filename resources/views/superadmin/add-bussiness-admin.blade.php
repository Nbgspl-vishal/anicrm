@extends('superadmin.layout.superadmin')
@section('title')
Add Bussiness Admin
@stop
@section('content')
<!-- END: SideNav-->
<!-- BEGIN: Page Main-->
<div id="main">
<div class="row">
   <div class="col s12">
      <div class="container">
         <div class="section">
            <!-- add form layout row -->
            <div class="listing-container form-container">
               <div class="row">
                  <div class="listing-header addhead-text">
                     <h5 class="web-head">Add Business Admin</h5>
                  </div>
                  <div class="add-form">
                     @if ($message = Session::get('success'))
                     <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                     </div>
                     @endif
                     @if ($message = Session::get('error'))
                     <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{{ $message }}</strong>
                     </div>
                     @endif                
                     @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endif              
                     <form action="{{url('getadmin')}}" method="post">
                        @csrf                       
                        <div class="card form-card">
                           <div class="card-head card-head-text">
                              Business Admin Information
                           </div>
                           <div class="card-content">
                              <div class="row">
                                 <div class="input-field col s12 m6">
                                    <label for="">Business Name?</label>
                                    <input type="emai" name="business_name"  placeholder="E-mail" />
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for="">What does Business do?</label>
                                    <select class="browser-default" style="margin-top:4px;" name="business">
                                       <option>Select Business Type</option>
                                       <option value="1"  >Opton 1</option>
                                       <option value="2" >Opton 2</option>
                                       <option value="3" >Opton 3</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="input-field col s12 m12">
                                    <label>How many work in it?</label>
                                    <label>
                                    <input class="with-gap radio-green" name="worker" name="group1" type="radio" value="justme" >
                                    <span>Just Me</span>
                                    </label> 
                                    <label>
                                    <input class="with-gap radio-green" name="worker"  name="group1" type="radio" value="2-3" >
                                    <span>2-3</span>
                                    </label> 
                                    <label>
                                    <input class="with-gap radio-green" name="worker"  name="group1" type="radio" value="4-6">
                                    <span>4-6</span>
                                    </label> 
                                    <label>
                                    <input class="with-gap radio-green" name="worker"  name="group1" type="radio" value="7" >
                                    <span>7+</span>
                                    </label>
                                 </div>
                              </div>
                              <hr class="hrgrey">
                              <div class="row">
                                 <div class="input-field col s12 m6">
                                    <label for>Full Name</label>
                                    <input type="text" name="name">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>Phone Number</label>
                                    <input type="tel" name="mobile"  placeholder="Enter Phone Number">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>Subdomain</label>
                                    <input type="text" name="subdomain"  placeholder="Enter Subdomain Number">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>Area</label>
                                    <input type="tel" name="area"  placeholder="Enter Address">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>City</label>
                                    <input type="tel" name="city" placeholder="Enter city">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>Country</label>
                                    <input type="tel" name="country"  placeholder="Enter country">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>Zip Code</label>
                                    <input type="tel" name="zip_code"  placeholder="Enter zip code">  
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="input-field col s12 m6">
                                    <label for>Email Address</label>
                                    <input type="email"  name="email"  placeholder="Enter Email Address">
                                 </div>
                                 <div class="input-field col s12 m6">
                                    <label for>Password</label>
                                    <input type="password" id="password" name="password" placeholder="Enter Password">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="input-field col s12 m6">
                                    <label for>Confirm Password</label>
                                    <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password">
                                    <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
                                    </div>
                                 </div>
                              </div>


                              <div class="permission-box">
                                       <div class="input-field col s12 m12">
                                          <label>
                                             <input class="with-gap radio-green" id="default-permission" name="default" type="radio" value="default">
                                             <span>Default Permissions</span>
                                          </label> 
                                          <label>
                                             <input class="with-gap radio-green" id="custom-permission" name="default" type="radio" value="custom">
                                             <span>Custom Permissions</span>
                                          </label> 
                                      </div>
                                         <div class="col s12 m12" id="custom-perm" style="display:none;">
                                          <div class="input-field">
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[chat]" class="checkbox">
                                                <label>Chat</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Contacts]" class="checkbox">
                                                <label>Contacts</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Jobs]" class="checkbox">
                                                <label>Jobs</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Team]" class="checkbox">
                                                <label>My Team</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Reports]" class="checkbox">
                                                <label>Reports</label>
                                             </div>
                                          </div>
                                         </div>
                                    </div>
                           </div>
                           <!-- <div class="card form-card">
                              <div class="card-head card-head-text">
                                 Permission & Advanced Permission
                              </div>
                              <div class="card-content">
                              
                                 <div class="permission-box">
                                       <div class="input-field col s12 m6">
                                          <div class="input-field">
                                             <p><b>Select Category</b></p>
                                             <select class="browser-default">
                                                <option>Demo1</option>
                                                <option>Demo2</option>
                                                <option>Demo3</option>
                                                <option>Demo4</option>
                                             </select>
                                          </div>
                              
                                          <hr>
                                          <p><b>Permission</b></p>
                                          <input type="checkbox" class="checkbox">
                                          <label>Select All</label><br>
                                          <hr>
                                          <input type="checkbox" class="checkbox">
                                          <label>Business</label><br>
                                          <input type="checkbox" class="checkbox">
                                          <label>Libraries</label><br>
                                          <input type="checkbox" class="checkbox">
                                          <label>User staff</label><br>
                                       </div>
                              
                                       
                                       <div class="input-field col s12 m6">
                                          <div class="input-field">
                                             <p><b>Select Category</b></p>
                                             <select class="browser-default">
                                                <option>Demo1</option>
                                                <option>Demo2</option>
                                                <option>Demo3</option>
                                                <option>Demo4</option>
                                             </select>
                                          </div>
                              
                                          <hr>
                                          <p><b>Advanced Permission</b></p>
                                          <input type="checkbox" class="checkbox">
                                          <label>Select All</label><br>
                                          <hr>
                                          <input type="checkbox" class="checkbox">
                                          <label>Asset-Delete</label><br>
                                          <input type="checkbox" class="checkbox">
                                          <label>Asset-Delete <br>Private attachment</label><br>
                                          <input type="checkbox" class="checkbox">
                                          <label>Asset-Delete <br> Private notes</label><br>
                                          <input type="checkbox" class="checkbox">
                                          <label>Company - clear data</label><br>
                                          <input type="checkbox" class="checkbox">
                                          <label>Company - documentaion delete</label><br>
                                       </div>
                                    </div>
                              </div>
                              </div> -->


















                           <div class="form-submit">
                              <button type="submit" class="btn">Save</button>
                              <button class="btn">Cancel</button>
                           </div>
                        </div>
                     </form>
                     </div>
                  </div>
               </div>
               <!-- add form layout row -->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
   function checkPasswordMatch() {
       var password = $("#password").val();
       var confirmPassword = $("#cpassword").val();
       if (password != confirmPassword)
           $("#CheckPasswordMatch").html("Passwords does not match!");
       else
           $("#CheckPasswordMatch").html("Passwords match.");
   }
   $(document).ready(function () {
      $("#cpassword").keyup(checkPasswordMatch);
   });
</script>
<script>
   $(function(){
     $('input#custom-permission').click(function(){
       if ($(this).is(':checked'))
       {
         $('#custom-perm').show();
       }
       else{
         $('#custom-perm').hide();
       }
     });
     // Default permission
     $('input#default-permission').click(function(){
       if ($(this).is(':checked'))
       {
         $('#custom-perm').hide();
       }
     });
   });

   // 
   </script>
@stop