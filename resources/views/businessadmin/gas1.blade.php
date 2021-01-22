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
                     <div class="listing-header">
                                    <h5 class="web-head">Certificates & Forms</h5>
                                    <div class="action-btns">

                                        <a class="waves-effect waves-light btn add-list-btn" href="gas-new-contact.php"><span><i class="fa fa-plus"
                                                    aria-hidden="true"></i> Create Contact</span></a>
                                        
                                        
                                    </div>
                                </div>

                     <div class="row">
                        <div class="s12">
                           <a href="#modal2" class="modal-trigger">
                              <div class="gas1tool">
                              <h3><i class="fa fa-user-circle"></i>Demo Company <span><i class="fa fa-envelope"></i> demo@gmail.com</span></h3>
                              <h6>John Appleseed</h6>
                              <h6 class="submitted-title">
                                 TRADITIONAL COUNTRY, BIG CITY, LITTLE COTTAGE, 17 HIGH STREET, CRAFTY VALLEY, UNITED KINGDOM
                              </h6>

                              <hr>
                              <p><span class="submitted-title">Collen Davidson</span> - Traditional country, Big city, 3 High street, Crafty valley</p>
                              <p><span class="submitted-title">Cody Myers</span> - Traditional country, Crafty valley, Big house, High street</p>
                           </div>
                           </a>
                           

                           <a href="gas1-1.php">
                              <div class="gas1tool">
                                 <h3><i class="fa fa-user-circle"></i>Graham The Plumber's Merchant <span><i class="fa fa-envelope"></i> demo@gmail.com</span></h3>
                                 <h6>Graham The Plumber's Merchant</h6>
                                 <p class="submitted-title">
                                    TRADITIONAL COUNTRY, BIG CITY, LITTLE COTTAGE, 17 HIGH STREET, CRAFTY VALLEY, UNITED KINGDOM
                                 </p>
                              </div>
                           </a>
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

   <div id="modal2" class="modal showdiaries-modal">

        <div class="modal-header">
            <h2>Is there an open project for this form or certificate?</h2>

                <a  class="closebtn modal-close"><i class="fa fa-times"></i></a>
        </div>
        <div class="modal-content">

            <div class="row">
                <div class="col s12">
                    <div class="modal-show-body">
                      
                           <div class="modal-content-boby-scroll">
                              <a href="gas1-1.php">
                                 <div class="listing-body">
                                    <h4>Testing</h4>
                                    <p>Demo Company</p>
                                    <p>(Code Myers - Traditional country, crafty valley, big house, high street)</p>
                                 </div>
                              </a>

                              <a href="gas1-1.php">
                                 <div class="listing-body">
                                    <h4>Testing</h4>
                                    <p>Demo Company</p>
                                    <p>(Code Myers - Traditional country, crafty valley, big house, high street)</p>
                                 </div>
                              </a>
                           </div>
                       

                    </div>
                </div>
            </div>

          
          <div class="row">
              <div class="s12">
                  <a href="create-new-project.php" class="modal-app-btn"><i class="fa fa-times"></i> None of the above</a>
              </div>
          </div>
        </div>
      </div>
   <!-- END: Page Main-->
   <!-- BEGIN: Footer-->
   <?php include 'footer.php'; ?>