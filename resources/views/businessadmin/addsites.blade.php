<?php include 'head.php' ?>
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
                        <!-- add form layout row -->
                         <div class="listing-container form-container">
                            <div class="row">

                                <div class="listing-header addhead-text">
                                    <h5 class="web-head">Add Sites</h5>                                   
                                </div>

                                <div class="add-form">
                                    <form>
                                       

                                        

                                        <div class="card form-card">
                                            <div class="card-head card-head-text">
                                                Site information
                                            </div>
                                            <div class="card-content">                                                       
                                                <div class="row">
                                                    <!-- <div class="input-field col s12">
                                                        <label for="name2" class="active">Customer</label>
                                                            <select class="select2-data-array browser-default" id="select2-array">
                                                                <option>Ravi kant</option>
                                                                <option>Ravi kant</option>
                                                                <option>Ravi kant</option>
                                                            </select>
                                                        </div> -->
                                                    <div class="input-field col s12">
                                                      <label for="">Customer</label>
                                                      <div style="display: flex;">
                                                         <select class="browser-default">
                                                            <option>Landlord</option>
                                                            <option>Tenant</option>
                                                            <option>Domestic</option>
                                                            <option>Commercial</option>
                                                         </select>
                                                         <span class="addmoretext-field">+</span> 
                                                      </div>
                                                      <div class="add-field-text" style="display: none;">
                                                         <div style="display: flex;">
                                                             <input type="text" placeholder="Add Customer" />
                                                            <span class="addmoretext-save">Save</span> 
                                                         </div>
                                                      </div>
                                                   </div>

                                                       

                                                    <div class="input-field col s12">
                                                        <label for="name2" class="active">Find Address to Populate All Fields</label>
                                                        <input type="text" placeholder="Type address, Company name, Post code"/>                                                            
                                                    </div>
                                                </div>  

                                                <div class="row">
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Site Name</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Telephone</label>
                                                        <input type="text" />                                                                       
                                                    </div>                                                      
                                                </div>  

                                                <div class="row">
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Site Reference Number</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                    <div class="input-field col s12 m6">
                                                      <label for="">Tag</label>
                                                      <select class="select2 browser-default" multiple="multiple">
                                                         <option selected>Test Data</option>
                                                         <option selected>Test Data</option>
                                                         <option selected>Test Data</option>
                                                         <option selected>Test Data</option>
                                                         <option selected>Test Data</option>
                                                         <option>Test Data</option>
                                                         <option>Test Data</option>
                                                       </select>                               
                                                   </div>                                                   
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Address</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                    <div class="input-field col s12 m6">
                                                        <label for="">City Town</label>
                                                        <input type="text" />                                                                       
                                                    </div>                                                      
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Country</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Post Code</label>
                                                        <input type="text" />                                                                       
                                                    </div>                                                      
                                                </div>                                                     
                                            </div>
                                        </div>

                                        <div class="card form-card">
                                            <div class="card-head card-head-text">
                                                Site Contact
                                            </div>
                                            <div class="card-content"> 

                                                <div class="row">
                                                   <div class="input-field col s12 m6">
                                                      <input type="checkbox" class="checkbox" id="samedetailcontact" /> 
                                                      <label for="samedetailcontact">Use same detail as main contact?</label>
                                                   </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m6">
                                                        <label for="">First Name</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Last Name</label>
                                                        <input type="text" />                                                                       
                                                    </div>                                                      
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Telephone</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                    <div class="input-field col s12 m6">
                                                        <label for="">Email</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <label for="">Job Position</label>
                                                        <input type="text" />                                                                       
                                                    </div>
                                                </div>                                                       
                                            </div>
                                        </div>

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