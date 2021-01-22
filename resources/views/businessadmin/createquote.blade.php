
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
                        <div class="listing-header addhead-text">
                           <h5 class="web-head">Create Quote</h5>
                        </div>
                        <div class="add-form">
                           <form>
                              <div class="card form-card">
                                 <div class="card-head card-head-text">
                                    Customer & Site Details
                                 </div>
                                 <div class="card-content">
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="name2" class="active">Customer</label>
                                          <select class="select2-data-array browser-default" id="select2-array">
                                             <option>Ravi kant</option>
                                             <option>Ravi kant</option>
                                             <option>Ravi kant</option>
                                          </select>
                                       </div>
                                       <div class="input-field col s12 m6">
                                          <label for="name2" class="active">Site</label>
                                          <select class="select2-data-array browser-default" id="select2-array2">
                                             <option>Ravi kant</option>
                                             <option>Ravi kant</option>
                                             <option>Ravi kant</option>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="name2" class="active">Job</label>
                                          <input type="text" >
                                       </div>

                                       <div class="input-field col s12 m6">
                                          <label for="name2" class="active">Contact</label>
                                          <input type="text" >
                                       </div>
                                    </div>

                                    
                                 </div>
                              </div>

                              <div class="card form-card">
                                 <div class="card-head card-head-text">
                                    Quote Details
                                 </div>
                                 <div class="card-content">
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Quote Number</label>
                                          <input type="text" >
                                       </div>

                                       <div class="input-field col s12 m6">
                                          <label for="">Customer PO Number</label>
                                          <input type="text" >
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class=" col s12">
                                          <p>Type to enter quote details manually or <span class="ml-2"><a href="#" class="add-cost-btn">Add Costs</a></span></p>
                                       </div>
                                    </div>

                                    <div class="row">
                                       <div class="col s12">
                                          <table class="mt-4 dataTable " role="grid">
                                             <thead>
                                                <tr>
                                                   <th>Item</th>
                                                   <th>Description</th>
                                                   <th>Quantity</th>
                                                   <th>Unit Price</th>
                                                   <th>Discount</th>
                                                   <th>Tax Rate</th>
                                                   <th>Tax Amount</th>
                                                   <th>Total</th>
                                                </tr>
                                             </thead>

                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <div class="input-field">
                                                         <input type="text">
                                                      </div>
                                                   </td>
                                                   <td>
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   </td>
                                                   <td>4</td>
                                                   <td>500</td>
                                                   <td>100</td>
                                                   <td>10%</td>
                                                   <td>40</td>
                                                   <td>440</td>
                                                 
                                                </tr>

                                                 <tr>
                                                   <td>
                                                      <div class="input-field">
                                                         <input type="text">
                                                      </div>
                                                   </td>
                                                   <td>
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   </td>
                                                   <td>4</td>
                                                   <td>500</td>
                                                   <td>100</td>
                                                   <td>10%</td>
                                                   <td>40</td>
                                                   <td>440</td>
                                                 
                                                </tr>

                                                 <tr>
                                                   <td>
                                                      <div class="input-field">
                                                         <input type="text">
                                                      </div>
                                                   </td>
                                                   <td>
                                                      Lorem ipsum dolor sit amet, consectetur adipisicing
                                                   </td>
                                                   <td>4</td>
                                                   <td>500</td>
                                                   <td>100</td>
                                                   <td>10%</td>
                                                   <td>40</td>
                                                   <td>440</td>
                                                 
                                                </tr>
                                             </tbody>
                                          </table>

                                          <div class="row mt-2">
                                             <div class="col s12 m8">
                                                <p><a href="#">+ Add new line to quote</a></p>
                                             </div>

                                             <div class="col s12 m4">
                                                <p>Subtotal <span class="invoicecost">£0.00</span></p>
                                                <p>VAT <span class="invoicecost">0%</span></p>
                                                <p>Total <span class="invoicecost">£0.oo</span></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <!-- <div class="card form-card">
                                 <div class="card-head card-head-text">
                                    Quote Details
                                 </div>
                                 <div class="card-content">
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Create Tag(s)</label>
                                          <input type="text" /> 
                                       </div>
                                       <div class="input-field col s12 m6">
                                          <label for="">Title</label>
                                          <input type="text" />                                                                               
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Job Type</label>
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
                                          <input type="text" />                                                                               
                                       </div>
                                       
                                    </div>
                                    <div class="row">
                                       
                                       <div class="input-field col s12 m6">
                                          <label for="">Source of Enquiry</label>
                                          <select class="browser-default">
                                             <option>Plese select an option..</option>
                                             <option>Test data</option>
                                          </select>
                                       </div>

                                       <div class="input-field col s12 m6">
                                          <label for="">Priority Level</label>
                                          <select class="browser-default">
                                             <option>Plese select an option..</option>
                                             <option>Test data</option>
                                          </select>
                                       </div>

                                    </div>
                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Quote Owner</label>
                                          <select class="browser-default">
                                             <option>Plese select an option..</option>
                                             <option>Test data</option>
                                          </select>
                                       </div>

                                       <div class="input-field col s12 m6">
                                          <label for="">Expiry Date</label>
                                          <input type="date" />                                                                               
                                       </div>
                                    </div>


                                    <div class="row">
                                       <div class="input-field col s12 m6">
                                          <label for="">Quote Total</label>
                                          <input type="text" />
                                       </div>

                                       <div class="input-field col s12 m6">
                                          <label for="">Est. completion time</label>
                                          <input type="time" />                                                                               
                                       </div>
                                    </div>
                                   
                                    <div class="row">
                                       <div class="input-field col s12">
                                          <label for="">Description</label>
                                          <textarea></textarea>                                                                            
                                       </div>
                                    </div>
                                   
                                    
                                 </div>
                              </div> -->
                              
                              <div class="form-submit">
                                 <button class="btn">Save</button>
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
   <?php include 'footer.php'; ?>