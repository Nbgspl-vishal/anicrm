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
                                 Checklist
                              </div>
                              <div class="card-content">
                                 <form>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5 class="mb-2">System Type</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist1">
                                             <label for="checklist1">Vanted</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist2">
                                             <label for="checklist2">Sealed</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist3">
                                             <label for="checklist3">Fully Pumped</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist4">
                                             <label for="checklist4">Gravity Hot Water</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist5">
                                             <label for="checklist5">Thermal Store</label>
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="s12">
                           <div class="card">
                              <div class="card-head">
                                 System Age
                              </div>
                              <div class="card-content">
                                 <form>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5 class="mb-2">Boiler Age</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Year</label>
                                             <input type="text" >
                                             
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Month</label>
                                             <input type="text" >
                                             
                                          </div>
                                       </div>

                                    </div>



                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5 class="mb-2">Radiator Age</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Year</label>
                                             <input type="text" >
                                             
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Month</label>
                                             <input type="text" >
                                             
                                          </div>
                                       </div>

                                    </div>


                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5 class="mb-2">Pipework Age</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Year</label>
                                             <input type="text" >
                                             
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Month</label>
                                             <input type="text" >
                                             
                                          </div>
                                       </div>

                                    </div>


                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5 class="mb-2">Boiler Type</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist6">
                                             <label for="checklist6">Conventional</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist7">
                                             <label for="checklist7">Combi type including boiler</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist8">
                                             <label for="checklist8">Condensing</label>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Location of Boiler</label>
                                             <select class="browser-default">
                                                <option>Under-Stairs Cupboard</option>
                                                <option>Kitchen Cupboard</option>
                                                <option>Airing Cupboard</option>
                                                <option>Utility Room</option>
                                                <option>Utility Cupboard Room</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Serial Number</label>
                                             <input type="text">
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Cylinder Type</label>
                                             <select class="browser-default">
                                                <option>Combi System (no cylinder)</option>
                                                <option>Conventional Indirect</option>
                                                <option>Fortic/Primatic</option>
                                                <option>Thermal Store</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Pipework Type</label>
                                             <select class="browser-default">
                                                <option>Copper Type 15mm/22mm</option>
                                                <option>Microbore</option>
                                                <option>Singal Pipe</option>
                                                <option>Steel Pipework</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5>If Microbore System</h5>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Are twin radiator valves fitted?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>N/A</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>If Yes, are all radiator completely warm when boiler firing?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>N/A</option>
                                              
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5>If Singal Pipe System</h5>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="input-field">
                                             <label>If there heat (circulation) to all radiators?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>N/A</option>
                                             </select>
                                          </div>
                                       </div>

                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5>If Steel Pipework</h5>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="input-field">
                                             <label>If the system sufficiently sound to powerflush?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>N/A</option>
                                             </select>
                                          </div>
                                       </div>

                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5 class="mb-2">Location of Circulator Pump</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist9">
                                             <label for="checklist9">In boiler casing</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist10">
                                             <label for="checklist10">Boiler adjacent</label>
                                          </div>
                                       </div>

                                       <div class="col l4 m6 s12">
                                          <div class="input-field">
                                             <input type="checkbox" class="checkbox" id="checklist11">
                                             <label for="checklist11">Airing cupboard</label>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="input-field">
                                             <label>Other</label>
                                             <input type="text">
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5>Number of Radiators</h5>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Aluminium</label>
                                             <input type="text">
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Steel/Cast Iron</label>
                                             <input type="text">
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>All Radiators Getting Warm?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>TRV's (Thermostatic Valves) Fitted?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Any obvious signs of Damage, Neglect, or Leaks?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l6 m6 s12">
                                          <div class="input-field">
                                             <label>Do all TRV's open fully?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5>Zone Vales</h5>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l4 m4 s12">
                                          <div class="input-field">
                                             <label>Are zone vales present?</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l4 m4 s12">
                                          <div class="input-field">
                                             <label>Where are the zone valves located?</label>
                                             <select class="browser-default">
                                                <option>Under-Stairs Cupboard</option>
                                                <option>Kitchen Cupboards</option>
                                                <option>Airing Cupboards</option>
                                                <option>Utility Room</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col l4 m4 s12">
                                          <div class="input-field">
                                             <label>Other Locations</label>
                                             <select class="browser-default">
                                                <option>Kitchen</option>
                                                <option>Under-Stairs Cupboard</option>
                                                <option>Kitchen Cupboard</option>
                                                <option>Airing Cupboard</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="card-form-content">
                                             <h5>Feed & Expansion</h5>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l4 m4 s12">
                                          <div class="input-field">
                                             <label>F+E Tank Checked</label>
                                             <select class="browser-default">
                                                <option>Yes</option>
                                                <option>No</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="col l4 m4 s12">
                                          <div class="input-field">
                                             <label>F+E Tank Location</label>
                                             <select class="browser-default">
                                                <option>Under-Stairs Cupboard</option>
                                                <option>Kitchen Cupboards</option>
                                                <option>Airing Cupboards</option>
                                                <option>Utility Room</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="col l4 m4 s12">
                                          <div class="input-field">
                                             <label>F+E Tank Condition?</label>
                                             <input type="text">
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="input-field">
                                             <label>Colour of heating system water as taken from the bottom of a radiator</label>
                                             <select class="browser-default">
                                                <option>Clear</option>
                                                <option>Orange</option>
                                                <option>Dark Brown </option>
                                                <option>Gray</option>
                                                <option>Black</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <div class="input-field">
                                             <label>Visual inspection of system water before powerflush</label>
                                             <select class="browser-default">
                                                <option>Clear</option>
                                                <option>Orange</option>
                                                <option>Dark Brown </option>
                                                <option>Gray</option>
                                                <option>Black</option>
                                             </select>
                                          </div>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col l4 m4 s12">
                                          <button class="btn btn-info mt-2 btn-block">Save</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
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