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
                                <div class="listing-header">
                                    <h5 class="web-head">Contact</h5>
                                    <div class="action-btns">
                                        
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-print"
                                                    aria-hidden="true"></i>Print</span></a>
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-download"
                                                    aria-hidden="true"></i>Import</span></a>
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-upload"
                                                    aria-hidden="true"></i>Export</span></a>
                                    </div>
                                </div>
                                <div class="listing-filters">
                                    <div class="card">
                                        <div class="card-content">
                                            
                                            <div class="col s12 m6">
                                                <form class="web-form">
                                                    <div class="formfield">
                                                        <label>
                                                            Search Contact
                                                        </label>
                                                        <input type="text"
                                                            placeholder="Name / Address / Contact Details / Reference" />
                                                    </div>
                                                    
                                                    
                                                </form>

                                            </div>
                                            <div class="filters-buttons">
                                                <a class="waves-effect waves-light btn transparent-background-btn"><span><i
                                                            class="fas fa-redo-alt"></i>Reset
                                                        filter</span></a>
                                                <a class="waves-effect waves-light btn transparent-background-btn"><span><i
                                                            class="fa fa-search" aria-hidden="true"></i>
                                                        Search</span></a>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="listing-table">
                                    <div class="card">
                                        <div class="listing-table-tab">
                                            <ul>
                                                <li class="active-list" id="lat"><a href="#">Active <span
                                                            class="list-count">(3)</span></a>
                                                </li>
                                                <li id="lst"><a href="#">Archived <span class="list-count"></span></a>
                                                </li>
                                                <li id="lalt"><a href="#">All <span class="list-count">(3)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-tab-content">
                                            <div id="latt" class="listing-tab-content-section active-table">
                                                <div class="card-head">
                                                    Active
                                                </div>
                                                <div class="card-content">
                                                        <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone no.</th>
                                                                    <th>Address</th>
                                                                    <th>City</th>
                                                                    <th>Post Code</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>
                                                            </tbody>

                                                        </table>
                                                </div>
                                            </div>
                                            <div style="display:none;" id="lstt"
                                                class="listing-tab-content-section suspended-table">
                                                <div class="card-head">
                                                    Suspended
                                                </div>
                                                <div class="card-content">
                                                    <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone no.</th>
                                                                    <th>Address</th>
                                                                    <th>City</th>
                                                                    <th>Post Code</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>
                                                            </tbody>

                                                        </table>

                                                    
                                                </div>
                                            </div>
                                            <div style="display:none;" id="laltt"
                                                class="listing-tab-content-section all-table">
                                                <div class="card-head">
                                                    All
                                                </div>
                                                <div class="card-content">
                                                    <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone no.</th>
                                                                    <th>Address</th>
                                                                    <th>City</th>
                                                                    <th>Post Code</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>Chander nagar Delhi</td>
                                                                   <td>Delhi</td>
                                                                   <td>110051</td>
                                                               </tr>
                                                            </tbody>

                                                        </table>

                                                    
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
<!-- END: Page Main-->

    <!-- BEGIN: Footer-->

   <?php include 'footer.php'; ?>