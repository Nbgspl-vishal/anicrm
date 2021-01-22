@extends('businessadmin.layouts.ani')



@section('title')

Dashbord

@stop



@section('content')
   <!-- BEGIN: Page Main-->

   <div id="main">

      <div class="row">

         <div class="admin-header user-header">

            <div class="col s12">

               <h4 class="admin-heading username-head"> {{Auth::user()->name}}</h4>

            </div>

         </div>

         <div class="col s12">

            <div class="container">

               <div class="section">

                  <div class="col s12 m4 l3 user-section-negative-margin">

                     <div class="row">

                        <div class="col s12 center-align">
 <img class="responsive-img circle z-depth-3" id="sAdminprofile" src="{{asset('assets/user/'.Auth::user()->profile_image)}}" alt="">
                        </div>

                     </div>

                  </div>

                  <div class="profile-tab-section">

                     <div class="tablist">

                        <ul class="tabs card-border-gray mt-4">

                           <li class="tab col m3 s6 p-0 active" id="pd"><a href="">

                              <i class="material-icons vertical-align-middle">crop_portrait</i> Details

                              </a>

                           </li>

                           <li class="tab col m3 s6 p-0" id="pn"><a class="active" href="">

                              <i class="material-icons vertical-align-middle">assignment</i> Notes

                              </a>

                           </li>

                           <li class="tab col m3 s6 p-0" id="ped"><a href="">

                              <i class="material-icons vertical-align-middle">contacts</i> Engineer Details

                              </a>

                           </li>

                        </ul>

                     </div>

                     <div class="tab-content-sections tab-container">

                        <div class="profile-tab-content tab-child" id="pdt" style="display:block;">

                           <div class="card">

                              <div class="card-head">

                                 Details
                             
                                 <div class="right-head">

                                    <span><button class="btn edit-it"><i class="fa fa-edit"></i>Edit</button></span>

                                    <span><button id="myButton" class="btn save-it">Save</button></span>

                                    <span><button class="btn cancel-it">Cancel</button></span>

                                 </div>

                              </div>

                            <div class="card-content">
                                 <div class="col s12">
                                    <form action="{{url('admin/getprofile')}}" method="post" id="myForm" enctype="multipart/form-data">
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
                              </div>                           </div>

                        </div>

                        <div class="profile-tab-content notes tab-child" id="pnt">

                           <div class="card">

                              <div class="card-head">

                                 Notes

                              </div>

                              <div class="card-content">

                                 <div class="col s12">

                                    <form>

                                       <div class="input-field col s12">

                                          <label for="" class="">Note type</label>

                                          <select class="select2 browser-default">

                                             <optgroups>

                                             <option value="user1">User 1</option>

                                             <option value="user2" selected>User 2</option>

                                             <option value="user 3">User 3</option>

                                             <option value="user 4">User 4</option>

                                             </optgroup>

                                          </select>

                                       </div>

                                       <div class="input-field col s12">

                                          <div class="heighted">

                                             <input type="checkbox" class="checkbox" />

                                             <label>See Public</label>

                                             <input type="checkbox" class="checkbox" />

                                             <label>See Private</label>

                                          </div>

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label>Search notes</label>

                                          <input type="text" />

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="" class="">Tag(s)</label>

                                          <select class="browser-default">

                                             <option>Test data</option>

                                          </select>

                                       </div>

                                       <div class="input-field col s12">

                                          <button class="btn">Search</button>

                                       </div>

                                       <div class="input-field col s12">

                                          <textarea placeholder="Type notes here...."></textarea>

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="" class="">Add Tag(s) to Note / Attachment</label>

                                          <select class="browser-default">

                                             <option>Test data</option>

                                          </select>

                                       </div>

                                       <div class="input-field col s12 m6 attachment-btn">

                                          <button class="btn">Add Attachment</button>

                                       </div>

                                    </form>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="profile-tab-content tab-child" id="pedt">

                           <div class="card">

                              <div class="card-head">

                                 Engineer Details

                                 <div class="right-head">

                                    <span><button class="btn edit-it"><i class="fa fa-edit"></i>Edit</button></span>

                                    <span><button class="btn save-it">Save</button></span>

                                    <span><button class="btn cancel-it">Cancel</button></span>

                                 </div>

                              </div>

                              <div class="card-content">

                                 <div class="col s12">

                                    <form>

                                       <div class="e-detail-box">

                                          <span><b>Other information</b></span>

                                          <div class="input-field col s12 m4">

                                             <label for="" class="">Branch</label>

                                             <p>Test Name</p>

                                             <select class="browser-default">

                                                <option>Test branch</option>

                                             </select>

                                          </div>

                                          <div class="input-field col s12 m4">

                                             <label for="" class="">Class</label>

                                             <p>Test Class</p>

                                             <select class="browser-default">

                                                <option>Test class</option>

                                             </select>

                                          </div>

                                          <div class="input-field col s12 m4">

                                             <label for="" class="">Trades</label>

                                             <p>Test trades</p>

                                             <select class="browser-default">

                                                <option>Test trades</option>

                                             </select>

                                          </div>

                                       </div>

                                       <hr>

                                       <div class="e-detail-box">

                                          <span><b>Registration numbers</b></span>

                                          <div class="input-field col s12 m3">

                                             <label for="" class="">Gas</label>

                                             <p>Test Name</p>

                                             <input type="text" />

                                          </div>

                                          <div class="input-field col s12 m3">

                                             <label for="" class="">Electrical</label>

                                             <p>Test name</p>

                                             <input type="text" />

                                          </div>

                                          <div class="input-field col s12 m3">

                                             <label for="" class="">Oil</label>

                                             <p>Test name</p>

                                             <input type="text" />

                                          </div>

                                          <div class="input-field col s12 m3">

                                             <label for="" class="">Fgas</label>

                                             <p>Test name</p>

                                             <input type="text" />

                                          </div>

                                       </div>

                                       <hr>

                                       <div class="e-detail-box">

                                          <span><b>Working hours</b></span>

                                          <table class="web-table">

                                             <thead>

                                                <tr>

                                                   <th>Day</th>

                                                   <th>Start hour</th>

                                                   <th>End hour</th>

                                                   <th>Off all day</th>

                                                </tr>

                                             </thead>

                                             <tbody>

                                                <tr>

                                                   <td>Monday</td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <input type="checkbox"

                                                            class="checkbox" />

                                                      </div>

                                                   </td>

                                                </tr>

                                                <tr>

                                                   <td>Tuesday</td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <input type="checkbox"

                                                            class="checkbox" />

                                                      </div>

                                                   </td>

                                                </tr>

                                                <tr>

                                                   <td>Wednesday</td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <input type="checkbox"

                                                            class="checkbox" />

                                                      </div>

                                                   </td>

                                                </tr>

                                                <tr>

                                                   <td>Thursday</td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <input type="checkbox"

                                                            class="checkbox" />

                                                      </div>

                                                   </td>

                                                </tr>

                                                <tr>

                                                   <td>Friday</td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <input type="checkbox"

                                                            class="checkbox" />

                                                      </div>

                                                   </td>

                                                </tr>

                                                <tr>

                                                   <td>Saturday</td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <p>test</p>

                                                         <input type="text" />

                                                      </div>

                                                   </td>

                                                   <td>

                                                      <div class="input-field">

                                                         <input type="checkbox"

                                                            class="checkbox" />

                                                      </div>

                                                   </td>

                                                </tr>

                                             </tbody>

                                          </table>

                                          <span class="italic">If all values for a particular day are left blank,

                                          this Engineer will appear on your Planner with the same working

                                          hours

                                          as your Company Business Hours</span>

                                       </div>

                                       <hr>

                                       <div class="e-detail-box">

                                          <span><b>Working hours</b></span>

                                          <table class="web-table">

                                             <thead>

                                                <tr>

                                                   <th>Desctiption</th>

                                                   <th>Labour cost rate</th>

                                                   <th>Travel cost rate</th>

                                                   <th>Mileage cost rate</th>

                                                </tr>

                                             </thead>

                                             <tbody>

                                                <tr>

                                                   <td>Basic</td>

                                                   <td>

                                                      £0

                                                   </td>

                                                   <td>

                                                      £0

                                                   </td>

                                                   <td>

                                                      £0

                                                   </td>

                                                </tr>

                                             </tbody>

                                          </table>

                                          <div class="input-field col s12 m6">

                                             <label for="" class="">Debuctible days allowance</label>

                                             <p>Test</p>

                                             <input type="text" />

                                          </div>

                                          <div class="input-field col s12 m6">

                                             <label for="" class="">Remaining Allowance</label>

                                             <p>0</p>

                                             <input type="text" />

                                          </div>

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