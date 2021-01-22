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
    <script src="../app-assets/js/vendors.min.js"></script>
     <script src="../app-assets/vendors/fullcalendar/lib/moment.min.js"></script>
    <script src="../app-assets/vendors/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="../app-assets/vendors/fullcalendar/daygrid/daygrid.min.js"></script>
    <script src="../app-assets/vendors/fullcalendar/timegrid/timegrid.min.js"></script>
    <script src="../app-assets/vendors/fullcalendar/interaction/interaction.min.js"></script>
    
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="../app-assets/vendors/chartjs/chart.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../app-assets/js/plugins.js"></script>
    <script src="../app-assets/js/search.js"></script>
    <script src="../app-assets/js/custom/custom-script.js"></script>
    <script src="../app-assets/js/scripts/app-calendar.js"></script>

    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/scripts/dashboard-ecommerce.js"></script>
    <!-- END PAGE LEVEL JS-->
    <!-- BEGIN PAGE LEVEL JS-->

    <!-- END PAGE LEVEL JS-->
    

    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/scripts/form-select2.js"></script>
    <!-- END PAGE LEVEL JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../app-assets/vendors/select2/select2.full.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <script src="../app-assets/js/scripts/app-chat.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script type="text/javascript">
       
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

$(".supplierdetailtoggleopen").click(function(){
    $(".supplierdetailtoggle").toggle();
})

$(".clickalternateperson").click(function(){
    $(".openalternateperson").toggle();
})

$(".clickalternateperson1").click(function(){
    $(".openalternateperson1").toggle();
})



$(".clicktoaddinvoicingcontact").click(function(){
    $(".invoicingcontactopen").toggle();
})

$(".clicktoaddregistercompanyadd").click(function(){
    $(".registercompanyaddopen").toggle();
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