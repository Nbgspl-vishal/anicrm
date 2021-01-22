@extends('businessadmin.layouts.ani')
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

                                <div class="listing-header">
                                    <h5 class="web-head">Add Dynamic Dashboard</h5>                                  
                                </div>

                                <div class="add-form">
                                    <form>
                                        <div class="card form-card">
                                            <div class="card-content">
                                                <div class="row">
                                                        <div class="input-field col s12">
                                                            <label for="name2" class="active">Name</label>
                                                                <input type="text" />                                                             
                                                        </div>
                                                </div>                                                   
                                            </div>
                                        </div>

                                        <div class="card form-card">
                                            <div class="card-head">
                                                Sources
                                            </div>
                                            <div class="card-content">     
                                                <div class="row">
                                                    <div class="source-table">
                                                         <a class="btn modal-trigger" href="#modal1">Add Sources</a>
                                                        <table class="web-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Report</th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Demo</td>
                                                                    <td>All invoices</td>
                                                                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
    <div id="modal1" class="modal">
        <h4>Add Sources</h4>
        <div class="modal-content">
        
            <div class="input-field col s12 m6">
                <label for="name2" class="active">Name</label>
                <input type="text" />                                                               
            </div>
            <div class="input-field col s12 m6">
                <label for="name2" class="active">Report</label>
                <select class="browser-default">
                    <option>Test option1</option>
                    <option>Test option2</option>
                </select>                                                               
            </div>
            
        </div>
    <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancel</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

   <?php include 'footer.php'; ?>