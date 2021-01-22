<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- <meta name="description"
        content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
        content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect"> -->
    <title>ANI CRM</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
        integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/favicon/favicon-32x32.png"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css"
        href="{{asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/vertical-dark-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/vertical-dark-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/dashboard.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/data-tables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/form-select2.css')}}">
    <!-- END: Page Level CSS-->
    <link rel="stylesheet" href="{{asset('app-assets/vendors/select2/select2.min.css')}}" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/fullcalendar/css/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/fullcalendar/daygrid/daygrid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/fullcalendar/timegrid/timegrid.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/pages/app-calendar.css')}}">
    <style type="text/css">
      .modal-loader {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url("https://i.stack.imgur.com/hzk6C.gif")
                /*url("{{asset('app-assets/images/Simple preloader.gif')}}")*/
                50% 50% 
                no-repeat;
    }

    /* When the body has the loading class, we turn
       the scrollbar off with overflow:hidden */
    body.loading {
        overflow: hidden;   
    }

    /* Anytime the body has the loading class, our
       modal element will be visible */
    body.loading .modal-loader {
        display: block;
    }
    </style>
    @yield('css')
</head>
    <body
   class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
   data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
   <!-- BEGIN: Header-->
   @include('businessadmin.include.header')


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
                  <div class="avatar"><img src="{{asset('app-assets/images/icon/pdf-image.png')}}" width="24" height="30"
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
                  <div class="avatar"><img src="{{asset('app-assets/images/icon/doc-image.png')}}" width="24" height="30"
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
                  <div class="avatar"><img src="{{asset('app-assets/images/icon/xls-image.png')}}" width="24" height="30"
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
                  <div class="avatar"><img src="{{asset('app-assets/images/icon/jpg-image.png')}}" width="24" height="30"
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
                  <div class="avatar"><img class="circle" src="{{asset('app-assets/images/avatar/avatar-7.png')}}"
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
                  <div class="avatar"><img class="circle" src="{{asset('app-assets/images/avatar/avatar-8.png')}}"
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
                  <div class="avatar"><img class="circle" src="{{asset('app-assets/images/avatar/avatar-10.png')}}"
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
                  <div class="avatar"><img class="circle" src="{{asset('app-assets/images/avatar/avatar-12.png')}}"
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
@include('businessadmin.include.sidebar')
    @yield('content')
<div class="modal-loader"></div> 

         <!-- <footer class="page-footer footer footer-static footer-light navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2020 <a
                        href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                        target="_blank">PIXINVENT</a> All rights reserved.</span><span
                    class="right hide-on-small-only">Design and Developed by <a
                        href="https://pixinvent.com/">PIXINVENT</a></span></div>
        </div>
    </footer> -->

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('app-assets/js/vendors.min.js')}}"></script>
     <script src="{{asset('app-assets/vendors/fullcalendar/lib/moment.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/fullcalendar/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/fullcalendar/daygrid/daygrid.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/fullcalendar/timegrid/timegrid.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/fullcalendar/interaction/interaction.min.js')}}"></script>
    
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('app-assets/vendors/chartjs/chart.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{asset('app-assets/js/plugins.js')}}"></script>
    <script src="{{asset('app-assets/js/search.js')}}"></script>
    <script src="{{asset('app-assets/js/custom/custom-script.js')}}"></script>
    <script src="{{asset('app-assets/js/scripts/app-calendar.js')}}"></script>

    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/scripts/dashboard-ecommerce.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN PAGE LEVEL JS-->

    <!-- END PAGE LEVEL JS-->
    

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('app-assets/js/scripts/form-select2.js')}}"></script>
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('app-assets/vendors/select2/select2.full.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    @yield('footer')

    <script type="text/javascript">
$(document).on({
      ajaxStart: function() { $('body').addClass("loading");   },
      ajaxStop: function() { $('body').removeClass("loading"); }    
});
       
$(document).ready(function() {
    $("#news-slider").owlCarousel({
        items : 1,
        itemsDesktop:[1199,1],
        itemsDesktopSmall:[980,1],
        itemsTablet : [768,1],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:false
    });
});

$(".max-length").select2({
    dropdownAutoWidth: true,
    width: '100%',
    maximumSelectionLength: 2,
    placeholder: "Select maximum 2 items"
});

$(".addmoretext-field").click(function(){
    $(".add-field-text").toggle();
})

$(".addmoretext-field-site").click(function(){
    $(".add-field-text-site").toggle();
})

$(".addmoretext-field-site2").click(function(){
    $(".add-field-text-site2").toggle();
})

$(".addmoretext-field-site3").click(function(){
    $(".add-field-text-site3").toggle();
})
    </script>

    
</body>

</html>