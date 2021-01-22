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
                                    <h5 class="web-head">All PPM</h5>
                                    <div class="action-btns">
                                        <a class="waves-effect waves-light btn add-list-btn" href="addppm.php"><span><i class="fa fa-plus"
                                                    aria-hidden="true"></i>Add PPM</span></a>
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-print"
                                                    aria-hidden="true"></i>Print</span></a>
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-upload"
                                                    aria-hidden="true"></i>Export</span></a>
                                    </div>
                                </div>
                                <div class="listing-filters">
                                    <div class="card">
                                        <div class="card-content">
                                            <p class="filter-btn">
                                                <span class="hide-filter">Hide filter</span>
                                                <span class="show-filter">Show filter</span>
                                            </p>
                                            <div class="col s12 m6">
                                                <form class="web-form">
                                                    <div class="formfield col s12">
                                                        <label>
                                                            Search PPM Contracts
                                                        </label>
                                                        <input type="text"
                                                            placeholder="PPM Contract No. / Customer / Site / Description" />
                                                    </div>
                                                   
                                                    <p>
                                                        <a class="show-advance" href="#">Show advance</a>
                                                        <a class="hide-advance" href="#">Hide advance</a>
                                                    </p>
                                                    <div class="formfield col s12 m6 advance">
                                                        <label>Start Date</label>
                                                        <input type="text" placeholder="Start date" />
                                                    </div>
                                                    <div class="formfield col s12 m6 advance">
                                                        <label>End Date</label>
                                                        <input type="text" placeholder="End date" />
                                                    </div>

                                                    <div class="formfield col s12 m6 advance">                                                      
                                                        <input type="checkbox" class="checkbox" />
                                                         <label>Include Completed</label>
                                                    </div>

                                                    <div class="formfield col s12 m6 advance">                                                      
                                                        <input type="checkbox" class="checkbox" />
                                                         <label>Include Cancelled</label>
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
                                                <li class="active-list" id="lprog"><a href="#">In Progress <span class="list-count">(3)</span></a>
                                                </li>
                                                <li id="lcomppm"><a href="#">Completed <span class="list-count">(3)</span></a>
                                                </li>
                                                <li id="lppm"><a href="#">All <span class="list-count">(3)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-tab-content">
                                            <div id="lprogt" class="listing-tab-content-section active-table">
                                                <div class="card-head">
                                                    In Progress
                                                </div>
                                                <div class="card-content">                                                   
                                                    <div class="col s12">
                                                        <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Customer Name</th>
                                                                    <th>Site Name</th>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                    <th>Progress</th>
                                                                    <th>Description</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><span class="head-td">M000000</span></td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="head-td">M000000</span></td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span class="head-td">M000000</span></td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                    <td>test</td>
                                                                </tr>
                                                                
                                                                 
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display:none;" id="lcomppmt"
                                                class="listing-tab-content-section open-table">
                                                <div class="card-head">
                                                    Completed
                                                </div>
                                                <div class="card-content">
                                                    <div class="col s12">
                                                        <p>No data</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display:none;" id="lppmt"
                                                class="listing-tab-content-section open-table">
                                                <div class="card-head">
                                                    All
                                                </div>
                                                <div class="card-content">
                                                    <div class="col s12">
                                                        <p>No data</p>
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
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->

   <?php include 'footer.php'; ?>