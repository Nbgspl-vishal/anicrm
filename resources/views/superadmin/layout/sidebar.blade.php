<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">
   <div class="brand-sidebar">
      <h1 class="logo-wrapper"><a class="brand-logo darken-1" ><span
         class="logo-text hide-on-med-and-down">ANI CRM</span></a><a class="navbar-toggler" href="#"><i
         class="material-icons">radio_button_checked</i></a></h1>
   </div>
   <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
      data-menu="menu-navigation" data-collapsible="accordion">
      <li class="active bold"><a class="waves-effect waves-cyan " href="{{url('dashboard')}}">
        <img src="../app-assets/images/icon/1.png" alt="avatar">
        <span class="menu-title"
         data-i18n="Dashboard">Dashboard</span></a>
      </li>

      <li class="bold">
         <a class="waves-effect waves-cyan " href="{{url('bussiness-admin')}}">
            <img src="../app-assets/images/icon/6.png" alt="avatar">
            <!-- <i
               class="material-icons">exit_to_app</i> -->
            <span class="menu-title" data-i18n="Templates">Bussiness Admin</span>
         </a>
      </li>

      <li class="bold"><a class="waves-effect waves-cyan " href="{{url('payments')}}">
        <img src="../app-assets/images/icon/financials.png" alt="avatar">
        <span class="menu-title"
         data-i18n="Dashboard">Payments </span></a>
      </li>

      <li class="bold"><a class="waves-effect waves-cyan " href="{{url('privacy-policies')}}">

        <img src="../app-assets/images/icon/2.png" alt="avatar">

        <span class="menu-title" data-i18n="Templates">Privacy policies</span></a>
      </li>

      <li class="bold"><a class="waves-effect waves-cyan " href="{{url('terms-condition')}}">
         <img src="../app-assets/images/icon/icons8-accounting-30.png" alt="avatar">
         <span class="menu-title" data-i18n="Templates">Terms & Conditions</span></a>
      </li>


      <li class="bold">
         <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
            <img src="../app-assets/images/icon/7.png" alt="avatar">
            <span class="menu-title"
            data-i18n="Templates">Settings</span></a>
         <div class="collapsible-body">
            <ul class="collapsible collapsible-sub" data-collapsible="accordion">
               <li><a class="waves-effect waves-cyan" href="{{url('payment-setting')}}"><i
                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Payment Gateway Settings</span></a>
               </li>

               <li><a class="waves-effect waves-cyan" href="{{url('email-settings')}}"><i
                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Email Settings </span></a>
               </li>           
               
            </ul>
         </div>
      </li>
   </ul>
   <div class="navigation-background"></div>
   <a
      class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
      href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>