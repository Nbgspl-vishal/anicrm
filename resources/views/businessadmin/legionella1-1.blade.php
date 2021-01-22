@extends('businessadmin.layouts.ani')

<!-- END: Head-->
<body
   class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
   data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
   <!-- BEGIN: Header-->
   <?php  include 'header.php' ?>
   <!-- END: Header-->
   <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title">
         <a class="collection-item" href="#">
            <h6 class="search-title">FILES</h6>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/pdf-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                     submitted</span><small class="grey-text">Marketing Manager</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">17kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/doc-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                     Generator</span><small class="grey-text">FontEnd Developer</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">550kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/xls-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File
                     Uploaded</span><small class="grey-text">Digital Marketing Manager</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">20kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/jpg-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Anna
                     Strong</span><small class="grey-text">Web Designer</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">37kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion-title">
         <a class="collection-item" href="#">
            <h6 class="search-title">MEMBERS</h6>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-7.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                     class="grey-text">UI designer</small></div>
               </div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-8.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Michal
                     Clark</span><small class="grey-text">FontEnd Developer</small>
                  </div>
               </div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-10.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Milena
                     Gibson</span><small class="grey-text">Digital Marketing</small>
                  </div>
               </div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-12.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Anna
                     Strong</span><small class="grey-text">Web Designer</small>
                  </div>
               </div>
            </div>
         </a>
      </li>
   </ul>
   <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title">
         <a class="collection-item" href="#">
            <h6 class="search-title">PAGES</h6>
         </a>
      </li>
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
                  <!-- add form layout row -->
                  <div class="listing-container form-container">
                     <div class="row">
                        <div class="s12">
                           <div class="card">
                              <div class="card-head">
                                 Legionella Risk Assessment Form
                              </div>
                              <div class="card-content">
                                 This certificate can be used to document the results of legionella risk assessment for domestic  and non domestic properties.
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="s12">
                           <div class="card">
                              <div class="card-head">
                                 General
                              </div>

                              <div class="card-content">
                                 <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Type of form</label>
                                          <select class="browser-defaul">
                                             <option>Domestic</option>
                                             <option>Non Domestic</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Date of inspection</label>
                                          <input type="date" value="02/12/2020">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="s12">
                           <div class="card">
                              <div class="card-head">
                              Tenant, Property and System Details
                              </div>

                              <div class="card-content">
                                 <div class="row">
                                    <div class="col s12">
                                       <div class="input-field">
                                          <label>Are there any Resident. Tenants, or Visitors who are more susceptible to legionella due to helth, age, or lifestyle?</label>
                                          <select class="browser-defaul">
                                             <option>Yes</option>
                                             <option>No</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>What type of cold water System is in use?</label>
                                          <select class="browser-defaul">
                                             <option>Main fed only</option>
                                             <option>From storage tank</option>
                                             <option>Mixture of both</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>What type of hot water system is in use?</label>
                                          <select class="browser-defaul">
                                             <option>Invented cylinder</option>
                                             <option>Combi-Boiler</option>
                                             <option>Cylinder feed from tank</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Risk/Defects Identified
                              </div>

                              <div class="card-content">
                                 <div class="card-form-content">
                                    <div class="border-card-detail row">
                                       <div class="col s12">
                                         
                                             <a href="legionella-add-risk.php" class="btn btn-info"><i class="fa fa-plus"></i>Add New</a>
                                        
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Water Outlet Temperature
                              </div>

                              <div class="card-content">
                                 <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Is the Cold Water temperature below 20°C at outlets? </label>
                                          <select class="browser-defaul">
                                             <option>Yes</option>
                                             <option>No</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>If No, Recommendation</label>
                                          <input type="text">
                                       </div>
                                    </div>
                                 </div>

                                  <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Is the hot Water temperature below 50°C at outlets? </label>
                                          <select class="browser-defaul">
                                             <option>Yes</option>
                                             <option>No</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>If No, Recommendation</label>
                                          <input type="text">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Cold Water System
                              </div>

                              <div class="card-content">
                                 <div class="card-form-content">
                                    <div class="border-card-detail row">
                                       <div class="col l6 m6 s12">
                                          <h3><i class="fa fa-exclamation-circle"></i> <span class="main-title-alert">Not Checked</span></h3>
                                       </div>

                                       <div class="col l6 m6 s12">
                                         <div class="border-card-detail-btn">
                                             <a href="legionella-cold-water.php" class="btn btn-info"><i class="fa fa-plus"></i> Cold Water System</a>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Hot Water System
                              </div>

                              <div class="card-content">
                                 <div class="card-form-content">
                                    <div class="border-card-detail row">
                                       <div class="col l6 m6 s12">
                                          <h3><i class="fa fa-exclamation-circle"></i> <span class="main-title-alert">Not Checked</span></h3>
                                       </div>

                                       <div class="col l6 m6 s12">
                                         <div class="border-card-detail-btn">
                                             <a href="legionella-hot-water.php" class="btn btn-info"><i class="fa fa-plus"></i> Hot Water System</a>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Additional Risk Areas
                              </div>

                              <div class="card-content">
                                 <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Shower/Mixing Valves installed correctly and in good condition</label>
                                          <select class="browser-defaul">
                                             <option>Yes</option>
                                             <option>No</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>If Yes, Recommendation</label>
                                          <input type="text">
                                       </div>
                                    </div>
                                 </div>

                                  <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Any Legs in the pipe work should be removed, or the system altered so that water flow through all pipework regularly</label>
                                          <select class="browser-defaul">
                                             <option>Yes</option>
                                             <option>No</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>If Yes, Recommendation</label>
                                          <input type="text">
                                       </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>Recommend flushing the system on  a weekly basis or more</label>
                                          <select class="browser-defaul">
                                             <option>Yes</option>
                                             <option>No</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col l6 m6 s12">
                                       <div class="input-field">
                                          <label>If Yes, Recommendation</label>
                                          <input type="text">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                    

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Evidences
                              </div>

                              <div class="card-content">
                                 <div class="card-form-content">
                                    <div class="border-card-detail row">
                                       <div class="col s12">
                                         <div class="border-card-detail-btn">
                                             <a href="legionella-add-new-media.php" class="btn btn-info"><i class="fa fa-plus"></i>Attach images</a>
                                         </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head">
                                 Declaration
                              </div>

                              <div class="card-content">
                                 <div class="card-form-content">
                                    <div class="border-card-detail row">
                                       <div class="col l6 m6 s12">
                                          <p>Engineer Signature</p>
                                          <a href="legionella-main-user.php" class="btn btn-info btn-block"><i class="fa fa-plus"></i> Sign the Certificate</a>
                                       </div>

                                       <div class="col l6 m6 s12">
                                             <p>Date</p>
                                             <div class="input-field">
                                                <input type="date" value="02/12/2020">
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col l4 m4 s12">
                           <button class="btn btn-info btn-block">Next</button>
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
   <?php include 'footer.php'; ?>