   <!-- END: SideNav-->

@extends('superadmin.layout.superadmin')

@section('title')
Edit bussiness admin
@stop

@section('content')
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
                           <h5 class="web-head">Edit Bussiness Admin</h5>
                        </div>
                        <div class="add-form">
                           <form>
                              <!-- <div class="card form-card">
                                 <div class="card-content">
                                    <div class="row">
                                       <div class="input-field col s12">
                                          <label for="name2" class="active">Find Address to Populate All Fields</label>
                                          <input type="text" placeholder="Type Address, Company name, Postcode...."/>                                                                
                                       </div>
                                    </div>
                                 </div>
                              </div> -->
                              
                              <div class="card form-card">
                                 <div class="card-head card-head-text">
                                    Bussiness Admin Information
                                 </div>
                                 <div class="card-content">
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Bussiness Admin Name</label>
                                          <input type="text" value="Ravi" />
                                       </div>
                                       <div class="input-field col s12 m6">
                                          <label for="">Email</label>
                                          <input type="email" value="example@gmail.com" />
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Phone Number </label>
                                          <input type="text" value="1234567980" />
                                       </div>

                                       <div class="input-field col s12 m6">
                                          <label for="">Role </label>
                                          <select class="browser-default">
                                             <option>Select Role</option>
                                             <option selected>Bussiness Admin</option>
                                             <option>Role 2</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <div class="card form-card">
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
                                                   <option selected>Demo2</option>
                                                   <option>Demo3</option>
                                                   <option>Demo4</option>
                                                </select>
                                             </div>

                                             <hr>
                                             <p><b>Permission</b></p>
                                             <input type="checkbox" class="checkbox">
                                             <label>Select All</label><br>
                                             <hr>
                                             <input type="checkbox" class="checkbox" checked>
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
                                                   <option selected>Demo3</option>
                                                   <option>Demo4</option>
                                                </select>
                                             </div>

                                             <hr>
                                             <p><b>Advanced Permission</b></p>
                                             <input type="checkbox" class="checkbox" checked>
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
                              </div>

                              
                              <div class="form-submit">
                                 <button class="btn">Save Changes</button>
                                 <button class="btn">Cancel</button>
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