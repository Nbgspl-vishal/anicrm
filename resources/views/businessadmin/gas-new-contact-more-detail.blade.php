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
                  <!-- table listing row -->
                  <div class="listing-container">
                     <div class="row">
                        <div class="s12">
                           <div class="card">
                              <div class="card-head">Contact Details</div>
                              <div class="card-content">
                                 <div class="row">
                                    <div class="col l3 m4 s12">
                                       <a href="gas-new-contact.php" class="btn btn-info btn-block">Less Details</a>
                                    </div>
                                    <div class="col l3 m4 s12">
                                       <a href="gas-new-contact-more-detail.php" class="btn btn-info btn-block">More Details</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="listing-table">
                           <div class="card">
                              <div class="listing-table-tab">
                                 <ul>
                                    <li class="active-list" id="first"><a href="javascript:void(0)">MAin Contact Details</a>
                                    </li>
                                    <li id="second"><a href="javascript:void(0)">Invoicing Contact </a>
                                    </li>
                                    <li id="third"><a href="javascript:void(0)">Registered Address</a>
                                    </li>
                                    <li id="third1"><a href="javascript:void(0)">Sites</a>
                                    </li>
                                    </li>
                                 </ul>
                              </div>
                              <div class="listing-tab-content">
                                 <div id="firstt" class="listing-tab-content-section active-table">
                                    <div class="card-head">
                                       General 
                                    </div>
                                    <div class="card-content">
                                       <div class="row">
                                          <div class="s12">
                                             <div class="row">
                                                <div class="col l6 m12 s12">
                                                   <div class="card">
                                                      <div class="card-head">Contact</div>
                                                      <div class="card-content">
                                                         <form>
                                                            <div class="row">
                                                               <div class="col s12 m6">
                                                                  <div class="input-field">
                                                                     <input type="checkbox" class="checkbox" id="gas-contact" checked> 
                                                                     <label for="gas-contact">Customer</label>
                                                                  </div>
                                                               </div>
                                                               <div class="col s12 m6">
                                                                  <div class="input-field">
                                                                     <input type="checkbox" class="checkbox supplierdetailtoggleopen" id="gas-supplier"> 
                                                                     <label for="gas-supplier">Supplier</label>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Company (optional if name is given)</label>
                                                                     <input type="text" placeholder="Type here">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Title (e.g. Mr, Mrs, ...)</label>
                                                                     <input type="text">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>First Name (optional)</label>
                                                                     <input type="text" placeholder="Type here">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Last Name (optional)</label>
                                                                     <input type="text" placeholder="Type here">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Description</label>
                                                                     <input type="text" placeholder="Type here">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Mobile (SMS)</label>
                                                                     <input type="text" placeholder="Type here">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Email</label>
                                                                     <input type="email" placeholder="Type here">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </form>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col l6 m12 s12">
                                                   <div class="card">
                                                      <div class="card-head">Address</div>
                                                      <div class="card-content">
                                                         <form>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Country</label>
                                                                     <select class="browser-default">
                                                                        <option>India</option>
                                                                        <option>Unites Kingdom</option>
                                                                        <option>Japan</option>
                                                                        <option>Nepal</option>
                                                                     </select>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Post Code</label>
                                                                     <input type="text">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Address line 1</label>
                                                                     <input type="text">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Address line 2</label>
                                                                     <input type="text">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Address line 3</label>
                                                                     <input type="text">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Town/City</label>
                                                                     <input type="text">
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div class="row">
                                                               <div class="col s12">
                                                                  <div class="input-field">
                                                                     <label>Country</label>
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
                                       <div class="row">
                                          <div class="s12">
                                             <div class="card">
                                                <div class="card-head">
                                                   Alternate Person
                                                </div>
                                                <div class="card-content">
                                                   <div class="card-form-content">
                                                      <div class="border-card-detail row">
                                                         <div class="col s12">
                                                            <div class="border-card-detail-btn">
                                                               <button class="btn btn-info clickalternateperson1"><i class="fa fa-plus"></i>Add Alternate Person</button>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>

                                                   <div class="openalternateperson1" style="display: none;">
                                                         <div class="row">
                                                   <div class="col l12 m12 s12">
                                                      <div class="card">
                                                         <div class="card-head">Alternate Person</div>
                                                         <div class="card-content">
                                                            <form>
                                                               
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Title (e.g. Mr, Mrs, ...)</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>First Name (optional)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Last Name (optional)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Mobile (SMS)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Email</label>
                                                                        <input type="email" placeholder="Type here">
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
                                       </div>
                                       <div class="row supplierdetailtoggle" style="display: none;">
                                          <div class="s12">
                                             <div class="card">
                                                <div class="card-head">Supplier Details</div>
                                                <div class="card-content">
                                                   <div class="row">
                                                      <div class="col s12">
                                                         <div class="input-field">
                                                            <label>VAT/TVA etc. number</label>
                                                            <input type="text">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col s12">
                                                         <div class="input-field">
                                                            <label>Account with supplier:</label>
                                                            <input type="text">
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
                                                   Contact Notes & External Reference
                                                </div>
                                                <div class="card-content">
                                                   <div class="row">
                                                      <div class="col s12">
                                                         <div class="input-field">
                                                            <textarea placeholder="Type your text..."></textarea>
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
                                                   External Reference
                                                </div>
                                                <div class="card-content">
                                                   <div class="row">
                                                      <div class="col s12">
                                                         <div class="input-field">
                                                            <input type="text">
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
                                                   Marketing and GDPR
                                                </div>
                                                <div class="card-content">
                                                   <form>
                                                      <div class="row">
                                                         <div class="col s12">
                                                            <div class="input-field">
                                                               <input type="checkbox" class="checkbox" id="marketing-gdpr">
                                                               <label for="marketing-gdpr">Opt the contact out of any marketing</label>
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
                                 <div style="display:none;" id="secondt"
                                    class="listing-tab-content-section suspended-table">
                                    <div class="card-head">
                                       Add Invoicing Contact
                                    </div>
                                    <div class="card-content">
                                       <p>Add a separate invoicing contact and address if it is different to the main contact details. it will be used for invoices.</p>
                                       <button class="btn btn-info btn-md clicktoaddinvoicingcontact mt-2"><i class="fa fa-plus mr-2"></i>Add Invoicing Contact</button>
                                       <div class="invoicingcontactopen" style="display: none;">
                                          <div class="row">
                                             <div class="s12">
                                                <div class="row">
                                                   <div class="col l6 m12 s12">
                                                      <div class="card">
                                                         <div class="card-head">Contact</div>
                                                         <div class="card-content">
                                                            <form>
                                                               <div class="row">
                                                                  <div class="col s12 m6">
                                                                     <div class="input-field">
                                                                        <input type="checkbox" class="checkbox" id="gas-contact" checked> 
                                                                        <label for="gas-contact">Customer</label>
                                                                     </div>
                                                                  </div>
                                                                  <div class="col s12 m6">
                                                                     <div class="input-field">
                                                                        <input type="checkbox" class="checkbox supplierdetailtoggleopen" id="gas-supplier"> 
                                                                        <label for="gas-supplier">Supplier</label>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Company (optional if name is given)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Title (e.g. Mr, Mrs, ...)</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>First Name (optional)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Last Name (optional)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Description</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Mobile (SMS)</label>
                                                                        <input type="text" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Email</label>
                                                                        <input type="email" placeholder="Type here">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </form>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col l6 m12 s12">
                                                      <div class="card">
                                                         <div class="card-head">Address</div>
                                                         <div class="card-content">
                                                            <form>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Country</label>
                                                                        <select class="browser-default">
                                                                           <option>India</option>
                                                                           <option>Unites Kingdom</option>
                                                                           <option>Japan</option>
                                                                           <option>Nepal</option>
                                                                        </select>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Post Code</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Address line 1</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Address line 2</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Address line 3</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Town/City</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Country</label>
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
                                          <div class="row">
                                             <div class="s12">
                                                <div class="card">
                                                   <div class="card-head">
                                                      Alternate Person
                                                   </div>
                                                   <div class="card-content">
                                                      <div class="card-form-content">
                                                         <div class="border-card-detail row">
                                                            <div class="col s12">
                                                               <div class="border-card-detail-btn">
                                                                  <button class="btn btn-info clickalternateperson"><i class="fa fa-plus mr-2"></i>Add Alternate Person</button>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>

                                                      <div class="openalternateperson" style="display: none;">
                                                         <div class="row">
                              <div class="col l12 m12 s12">
                                 <div class="card">
                                    <div class="card-head">Alternate Person</div>
                                    <div class="card-content">
                                       <form>
                                          
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="input-field">
                                                   <label>Title (e.g. Mr, Mrs, ...)</label>
                                                   <input type="text">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="input-field">
                                                   <label>First Name (optional)</label>
                                                   <input type="text" placeholder="Type here">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="input-field">
                                                   <label>Last Name (optional)</label>
                                                   <input type="text" placeholder="Type here">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="input-field">
                                                   <label>Mobile (SMS)</label>
                                                   <input type="text" placeholder="Type here">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row">
                                             <div class="col s12">
                                                <div class="input-field">
                                                   <label>Email</label>
                                                   <input type="email" placeholder="Type here">
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
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div style="display:none;" id="thirdt"
                                    class="listing-tab-content-section all-table">
                                    <div class="card-head">
                                       Add Register Company Address 
                                    </div>
                                    <div class="card-content">
                                       <p>Add the registered company address if it is different from the main address.</p>
                                       <button class="btn btn-info btn-md clicktoaddregistercompanyadd mt-2"><i class="fa fa-plus mr-2"></i>Add Register Company Address</button>
                                       <div class="registercompanyaddopen" style="display: none;">
                                          <div class="row">
                                             <div class="s12">
                                                <div class="row">
                                                   <div class="col l12 m12 s12">
                                                      <div class="card">
                                                         <div class="card-head">Address</div>
                                                         <div class="card-content">
                                                            <form>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Country</label>
                                                                        <select class="browser-default">
                                                                           <option>India</option>
                                                                           <option>Unites Kingdom</option>
                                                                           <option>Japan</option>
                                                                           <option>Nepal</option>
                                                                        </select>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Post Code</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Address line 1</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Address line 2</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Town/City</label>
                                                                        <input type="text">
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                               <div class="row">
                                                                  <div class="col s12">
                                                                     <div class="input-field">
                                                                        <label>Country</label>
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
                                 </div>
                                 <div style="display:none;" id="third1t"
                                    class="listing-tab-content-section all-table">
                                    <div class="card-head">
                                       Manage Site 
                                    </div>
                                    <div class="card-content">
                                       <p>View, edit or create sites if work will be performed at different places from the main contact details.</p>
                                    </div>
                                    <div class="card-head">
                                       Site 
                                    </div>
                                    <div class="card-content">
                                       <div class="input-field">
                                          <input type="text" placeholder="Search">
                                       </div>
                                       <a href="addnewsite.php" class="btn btn-info btn-md"><i class="fa fa-plus mr-2"></i>Addnew site</a>
                                    </div>
                                 </div>

                                 

                                 
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row mb-5">
                        <div class="col s12">
                           <div class="row">
                              <div class="col l4 m4 s12">
                                 <button class="btn btn-info btn-block">Save</button>
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