@extends('businessadmin.layouts.ani')

<!-- END: Head-->

<body
    class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
    data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php  include 'header.php' ?>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">FILES</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../app-assets/images/icon/pdf-image.png" width="24" height="30"
                                alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                                submitted</span><small class="grey-text">Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">17kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../app-assets/images/icon/doc-image.png" width="24" height="30"
                                alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                                Generator</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">550kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../app-assets/images/icon/xls-image.png" width="24" height="30"
                                alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File
                                Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
                    </div>
                    <div class="status"><small class="grey-text">20kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img src="../app-assets/images/icon/jpg-image.png" width="24" height="30"
                                alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna
                                Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                    <div class="status"><small class="grey-text">37kb</small></div>
                </div>
            </a></li>
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">MEMBERS</h6>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-7.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                                class="grey-text">UI designer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-8.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Michal
                                Clark</span><small class="grey-text">FontEnd Developer</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-10.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Milena
                                Gibson</span><small class="grey-text">Digital Marketing</small></div>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="collection-item" href="#">
                <div class="display-flex">
                    <div class="display-flex align-item-center flex-grow-1">
                        <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-12.png"
                                width="30" alt="sample image"></div>
                        <div class="member-info display-flex flex-column"><span class="black-text">Anna
                                Strong</span><small class="grey-text">Web Designer</small></div>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
        <li class="auto-suggestion-title"><a class="collection-item" href="#">
                <h6 class="search-title">PAGES</h6>
            </a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
        <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
                    class="material-icons">error_outline</span><span class="member-info">No results found.</span></a>
        </li>
    </ul>



    <!-- BEGIN: SideNav-->
    <?php include 'sidebar.php'; ?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <!-- table listing row -->
                        <div class="listing-container">
                            <div class="row">
                                <div class="listing-table">
                                    <div class="card">
                                        <div class="listing-table-tab">
                                            <ul>
                                                <li class="active-list" id="first"><a href="#">General</a>
                                                </li>
                                                
                                                <li id="third"><a href="#">Contacts</a>
                                                </li>

                                                <li id="third1"><a href="#">Notes</a>
                                                </li>

                                                <li id="third2"><a href="#">Jobs</a>
                                                </li>

                                                <li id="third3"><a href="#">Quotes</a>
                                                </li>

                                                <li id="third4"><a href="#">Invoices</a>
                                                </li>

                                                <li id="third5"><a href="#">Payments</a>
                                                </li>

                                                <li id="third6"><a href="#">Installed Parts</a>
                                                </li>

                                                <li id="third7"><a href="#">Appointments</a>
                                                </li>

                                                <li id="third8"><a href="#">Certificates & Forms</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-tab-content">
                                            <div id="firstt" class="listing-tab-content-section active-table">
                                                <div class="card-head">General 
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
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Customer Name </label>
                                                              <p>Test Name</p>
                                                              <input type="text">
                                                           </div>
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Reference Number</label>
                                                              <p>1234567890</p>
                                                              <input type="text" >
                                                           </div>
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Tags</label>
                                                              <p>Test Data</p>
                                                              <select class="browser-default">
                                                                 <option>Test Data</option>
                                                                 <option>Test Data</option>
                                                              </select>
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Address</label>
                                                              <p>Chabder Nagar Delhi</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Telephone Number</label>
                                                              <p>1234567890</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Main Contact</label>
                                                              <p>Rahul</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Invoice Contact</label>
                                                              <p>Puneet</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12">
                                                              <label for="" class="">Notes</label>
                                                              <p>www.example.com</p>
                                                              <p>www.example.com</p>
                                                              <p>www.example.com</p>
                                                              <input type="text" >
                                                              <a  href="#modal1" class="waves-effect waves-light btn modal-trigger mt-1">Add Note</a>
                                                           </div>
                                                        </div>
                                                     </form>
                                                  </div>
                                                </div>
                                            </div>
                                           
                                            <div style="display:none;" id="thirdt"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">Contacts 
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
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Name </label>
                                                              <p>Test Name</p>
                                                              <input type="text">
                                                           </div>
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Email</label>
                                                              <p>example@gmail.com</p>
                                                              <input type="email" >
                                                           </div>
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Phone Number</label>
                                                              <p>1234567890</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Address</label>
                                                              <p>Chander nagar Delhi 110051
                                                              </p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Post Code</label>
                                                              <p>110051</p>
                                                              <input type="text" >
                                                           </div>

                                                        </div>
                                                     </form>
                                                  </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third1t"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">Notes 
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
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Note type </label>
                                                              <p>Test Name</p>
                                                              <select class="browser-default">
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                              </select>
                                                           </div>
                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Tags</label>
                                                              <p>Test Data</p>
                                                              <select class="browser-default">
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                              </select>
                                                           </div>

                                                        </div>
                                                     </form>
                                                  </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third2t"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">Jobs 
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
                                                           <div class="input-field col s12 m6">
                                                              <label for="" class="">Customer </label>
                                                              <p>Test Name</p>
                                                              <select class="browser-default">
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                              </select>
                                                           </div>
                                                           <div class="input-field col s12 m6">
                                                              <label for="" class="">Site</label>
                                                              <p>Test Data</p>
                                                              <select class="browser-default">
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                              </select>
                                                           </div>

                                                           <div class="col s12 mt-1 mb-1">
                                                               <div class="card-head">
                                                                Job Detail
                                                             </div>
                                                           </div>

                                                           <div class="input-field col s12 m6">
                                                              <label for="" class="">Job Type</label>
                                                              <p>Test Data</p>
                                                              <select class="browser-default">
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                              </select>
                                                           </div>

                                                           <div class="input-field col s12 m6">
                                                              <label for="" class="">Tag(s)</label>
                                                              <p>Test Data</p>
                                                              <select class="browser-default">
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                                  <option>Test Data</option>
                                                              </select>
                                                           </div>




                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Est. Completion Time</label>
                                                              <p>12:23</p>
                                                              <input type="time">
                                                           </div>

                                                           

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Priority Level</label>
                                                              <p>Test Data</p>
                                                              <input type="text">
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Refrence No.</label>
                                                              <p>1234567890</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class=""> Customer PO Number</label>
                                                              <p>1234567890</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Job Added By</label>
                                                              <p>Rohit</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Date & Time</label>
                                                              <p>12/07/2020 - 12:36</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12">
                                                              <label for="" class="">Description</label>
                                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                              <input type="text" >
                                                           </div>


                                                           <div class="col s12 mt-1 mb-1">
                                                               <div class="card-head">
                                                                Allocate Team Member
                                                             </div>
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class="">Team Member</label>
                                                              <p>Rohit</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class=""> Appointment Date & Time</label>
                                                              <p>12/07/2020 - 12:36</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class=""> Note / Instruction</label>
                                                              <p>Test Data</p>
                                                              <input type="text" >
                                                           </div>

                                                           <div class="col s12 mt-1 mb-1">
                                                               <div class="card-head">
                                                                Add Costs
                                                             </div>
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class=""> Engineer cost</label>
                                                              <p>£0</p>
                                                              <input type="text" placeholder="£0">
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class=""> Parts cost</label>
                                                              <p>£0</p>
                                                              <input type="text" placeholder="£0">
                                                           </div>

                                                           <div class="input-field col s12 m4">
                                                              <label for="" class=""> Total </label>
                                                              <p>£0</p>
                                                              <input type="text" placeholder="£0">
                                                           </div>

                                                        </div>
                                                     </form>
                                                  </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third3t"
                                                class="listing-tab-content-section all-table">
                                                
                                                <div class="card-head">Quotes 
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
                                                                <div class="input-field col s12 m6">
                                                                  <label for="" class="">Customer </label>
                                                                  <p>Test Name</p>
                                                                  <select class="browser-default">
                                                                      <option>Test Data</option>
                                                                      <option>Test Data</option>
                                                                      <option>Test Data</option>
                                                                  </select>
                                                               </div>
                                                               <div class="input-field col s12 m6">
                                                                  <label for="" class="">Site</label>
                                                                  <p>Test Data</p>
                                                                  <select class="browser-default">
                                                                      <option>Test Data</option>
                                                                      <option>Test Data</option>
                                                                      <option>Test Data</option>
                                                                  </select>
                                                               </div>

                                                               <div class="col s12 mt-1 mb-1">
                                                                   <div class="card-head">
                                                                   Contacts
                                                                 </div>
                                                               </div>

                                                               <div class="input-field col s12 m12">
                                                                  <label for="" class="">Select Contacts</label>
                                                                  <p>Test Data</p>
                                                                  <select class="browser-default">
                                                                      <option>Test Data</option>
                                                                      <option>Test Data</option>
                                                                      <option>Test Data</option>
                                                                  </select>
                                                               </div>

                                                               <div class="col s12 mt-1 mb-1">
                                                                   <div class="card-head">
                                                                   Quote Details
                                                                 </div>
                                                               </div>

                                                               <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Create Tag(s)</label>
                                                                      <p>Test data</p>
                                                                      <input type="text" /> 
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Title</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />   
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Job Type</label>
                                                                      <p>Gas safety cert</p>
                                                                      <select class="browser-default">
                                                                         <option>Select option</option>
                                                                         <option>Gas safety cert</option>
                                                                         <option>Service</option>
                                                                         <option>Boiler installation</option>
                                                                         <option>Commissioning</option>
                                                                      </select>
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Quote Reference No.</label>
                                                                      <p>1234567890</p>
                                                                      <input type="text" /> 
                                                                   </div>
                                                                   
                                                                </div>
                                                                <div class="row">
                                                                   
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Source of Enquiry</label>
                                                                      <p>Test Data</p>
                                                                      <select class="browser-default">
                                                                         <option>Plese select an option..</option>
                                                                         <option>Test data</option>
                                                                      </select>
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Priority Level</label>
                                                                      <p>Test Data</p>
                                                                      <select class="browser-default">
                                                                         <option>Plese select an option..</option>
                                                                         <option>Test data</option>
                                                                      </select>
                                                                   </div>

                                                                </div>
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Quote Owner</label>
                                                                      <p>Test Data</p>
                                                                      <select class="browser-default">
                                                                         <option>Plese select an option..</option>
                                                                         <option>Test data</option>
                                                                      </select>
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Expiry Date</label>
                                                                      <p>12/05/2020</p>
                                                                      <input type="date" />   
                                                                   </div>
                                                                </div>


                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Quote Total</label>
                                                                      <p>1235</p>
                                                                      <input type="text" />
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Est. completion time</label>
                                                                      <p>12:36</p>
                                                                      <input type="time" />    
                                                                   </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                   <div class="input-field col s12">
                                                                      <label for="" class="">Description</label>
                                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                     <input type="text"> 
                                                                   </div>
                                                                </div>
                                                            </div>


                                                         </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third4t"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">Invoices 
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
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="" >Customer</label>
                                                                      <p>Ravi Kant</p>
                                                                      <select class=" browser-default">
                                                                         <option>Ravi kant</option>
                                                                         <option>Ravi kant</option>
                                                                         <option>Ravi kant</option>
                                                                      </select>
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="" >Job</label>
                                                                      <p>Ravi Kant</p>
                                                                      <select class=" browser-default" >
                                                                         <option>Ravi kant</option>
                                                                         <option>Ravi kant</option>
                                                                         <option>Ravi kant</option>
                                                                      </select>
                                                                   </div>

                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="name2">Date</label>
                                                                      <p>12/25/2020</p>
                                                                      <input type="date">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="name2">Expiry Date</label>
                                                                      <p>25/06/2020</p>
                                                                      <input type="date">
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="name2">Account Number</label>
                                                                      <p>123456790254</p>
                                                                      <input type="text">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="name2">Quote Number</label>
                                                                      <p>12354</p>
                                                                      <input type="text">
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="name2">Purchase order</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="name2">Bill to</label>
                                                                      <p>Rohit</p>
                                                                      <input type="text">
                                                                   </div>
                                                                </div>

                                                                <div class="row">

                                                                   <div class="input-field col s12">
                                                                      <label for="name2">Ship to</label>
                                                                      <p>Rohit</p>
                                                                      <input type="text">
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12">
                                                                      <label for="name2">Description</label>
                                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                      <input type="text">                 
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Amount</label>
                                                                      <p>1254</p>
                                                                      <input type="text" />                    
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">VAT </label>
                                                                      <p>12%</p>
                                                                      <input type="text" />                    
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12">
                                                                      <label for="name2">Total</label>
                                                                      <p>123564</p>
                                                                      <input type="text" />                 
                                                                   </div>
                                                                
                                                                </div>
                                                            </div>
                                                         </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third5t"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">
                                                    Payments
                                                </div>
                                                <div class="card-content">
                                                    <div class="row">
                                                        <div class="input-field col s12 m6">
                                                            <label >Name</label>
                                                            <p>Ravi Kant</p>  

                                                        </div>

                                                        <div class="input-field col s12 m6">
                                                            <label >Email</label>
                                                            <p>example@gmail.com</p>  
                                                                 
                                                        </div>

                                                        <div class="input-field col s12 m6">
                                                            <label >Phone Number</label>
                                                            <p>1234567890</p>  
                                                                 
                                                        </div>

                                                        <div class="input-field col s12 m6">
                                                            <label >Amount</label>
                                                            <p>89858</p>  
                                                                 
                                                        </div>

                                                        <div class="input-field col s12 m6">
                                                            <label >Method</label>
                                                            <p>UPI</p>  
                                                                 
                                                        </div>

                                                        <div class="input-field col s12 m6">
                                                            <label >Transaction ID</label>
                                                            <p>#123456dt</p>  
                                                                 
                                                        </div>
                                                                   
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third6t"
                                                class="listing-tab-content-section all-table">

                                                <div class="card-head">Installed Parts 
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
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label >Customer</label>
                                                                      <p>Test Data</p>
                                                                      <select class="browser-default">
                                                                         <option>Test customer1</option>
                                                                         <option>Test customer2</option>
                                                                      </select>
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label >Site</label>
                                                                      <p>Test Data</p>
                                                                      <select class="browser-default">
                                                                         <option>Test site 1</option>
                                                                         <option>Test site 2</option>
                                                                      </select>
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Supplier</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text">
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Item Refrence Number / SKU</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text">
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Make</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />      
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Model</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />    
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Serial Number</label>
                                                                      <p>123</p>
                                                                      <input type="text" />
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Equipment Class</label>
                                                                      <p>Test Data</p>
                                                                    <select class="browser-default">
                                                                        <option>Test Equipment 1</option>
                                                                        <option>Test Equipment 2</option>
                                                                        <option>Test Equipment 3</option>
                                                                        <option>Test Equipment 4</option>
                                                                    </select>
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Quantity</label>
                                                                      <p>12548</p>
                                                                      <input type="text" />
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Instalation Date</label>
                                                                      <p>25/05/2020</p>
                                                                        <input type="date">
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Location</label>
                                                                      <input type="text" />
                                                                      <p>Chander nagar Delhi</p>
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Cost (if suplied)</label>
                                                                      <p>1235</p>
                                                                        <input type="text">
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Estimated Replacement Date</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Estimated Replacement Cost</label>
                                                                      <p>Test Data</p>
                                                                        <input type="text">
                                                                   </div>
                                                                </div>

                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Part Warranty Expiry</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Set Reminder</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Labour Warranty Expiry</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Set Reminder</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>
                                                                </div>
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Service Frequency</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Set Reminder</label>
                                                                      <p>Test Data</p>
                                                                      <input type="text" />
                                                                   </div>
                                                                </div>
                                                                
                                                            </div>
                                                         </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third7t"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">Appointments 
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
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Name</label>
                                                                      
                                                                      <p>Ravi</p>
                                                                      <input type="text" />
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Last Name</label>
                                                                      <p>Kant</p>
                                                                        <input type="text">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Phone Number</label>
                                                                      <p>123456789</p>
                                                                        <input type="text">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Email ID</label>
                                                                      <p>Kant</p>
                                                                        <input type="email">
                                                                   </div>

                                                                   

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Appointment Date</label>
                                                                      <p>25/05/2020</p>
                                                                        <input type="date">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Appointment Time</label>
                                                                      <p>12:36</p>
                                                                        <input type="time">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">First Time Visit</label>
                                                                      <p>Yes</p>
                                                                        <select class="browser-default">
                                                                            <option>Yes</option>
                                                                            <option>No</option>
                                                                        </select>
                                                                   </div>
                                                                </div>
                                                            </div>
                                                         </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div style="display:none;" id="third8t"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">Appointments 
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
                                                                <div class="row">
                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">First Name</label>
                                                                      
                                                                      <p>Ravi</p>
                                                                      <input type="text" />
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Last Name</label>
                                                                      <p>Kant</p>
                                                                        <input type="text">
                                                                   </div>

                                                                   <div class="input-field col s12 ">
                                                                      <label for="">Role</label>
                                                                      <p>Role 1</p>
                                                                        <select class="browser-default">
                                                                            <option>Role 1</option>
                                                                            <option>Role 2</option>
                                                                        </select>
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Email ID</label>
                                                                      <p>example@gmail.com</p>
                                                                        <input type="email">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Telephone</label>
                                                                      <p>1234567890</p>
                                                                        <input type="text">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Joining Date</label>
                                                                      <p>12/05/2020</p>
                                                                        <input type="date">
                                                                   </div>

                                                                   <div class="input-field col s12 m6">
                                                                      <label for="">Complete Date</label>
                                                                      <p>Kant</p>
                                                                        <input type="date">
                                                                   </div>

                                                                   <div class="input-field col s12 ">
                                                                      <label for="">Description</label>
                                                                      <p>Kant</p>
                                                                        <input type="text">
                                                                   </div>

                                                                   
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
                        <!-- table listing row -->
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal showdiaries-modal">
        <div class="modal-header">
            <h2>Add More Notes</h2>
                <a  class="closebtn modal-close"><i class="fa fa-times"></i></a>
        </div>
        <div class="modal-content">
          <form>
                <div class="input-field col s12">
                    <label for="" class="">Notes</label>
                    <input type="text" >     
                </div>

                <button class="btn waves-light waves-effect">Save</button>
          </form>
        </div>
      </div>
<!-- END: Page Main-->

    <!-- BEGIN: Footer-->

   <?php include 'footer.php'; ?>