<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-dark sidenav-active-rounded">

   <div class="brand-sidebar">

      <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><span

         class="logo-text hide-on-med-and-down">ANI CRM</span></a><a class="navbar-toggler" href="#"><i

         class="material-icons">radio_button_checked</i></a></h1>

   </div>

   <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"

      data-menu="menu-navigation" data-collapsible="accordion">

      <li class="active bold"><a class="waves-effect waves-cyan " href="{{ url('admin/admin/dashboard')}}">

        <img src="{{asset('app-assets/images/icon/1.png')}}" alt="avatar">

        <span class="menu-title"

         data-i18n="Dashboard">Dashboard</span></a>

      </li>



      <li class="bold">

         <a class="waves-effect waves-cyan " href="{{ url('admin/calendar')}}">

            <img src="{{asset('app-assets/images/icon/planner.png')}}" alt="avatar">

            <!-- <i

               class="material-icons">exit_to_app</i> -->

            <span class="menu-title"

               data-i18n="Templates">Planner</span>

         </a>

      </li>



      <li class="bold">

         <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">

            <img src="{{asset('app-assets/images/icon/6.png')}}" alt="avatar">

            <span class="menu-title"

            data-i18n="Templates">Contacts</span></a>

         <div class="collapsible-body">

            <ul class="collapsible collapsible-sub" data-collapsible="accordion">

               <li><a class="waves-effect waves-cyan" href="{{( url('admin/allcustomer'))}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Customers</span></a>

               </li>



               <li><a class="waves-effect waves-cyan" href="{{ url('admin/suppliers')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Suppliers </span></a>

               </li>



               <li><a class="waves-effect waves-cyan" href="{{ url('admin/allsites')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Sites </span></a>

               </li>



               <li><a class="waves-effect waves-cyan" href="{{ url('admin/partslibrary')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Installed Parts</span></a>

               </li>

               

               

            </ul>

         </div>

      </li>



      <li class="bold"><a class="waves-effect waves-cyan " href="{{ url('admin/alljobs')}}">

        <img src="{{asset('app-assets/images/icon/5.png')}}" alt="avatar">

        <span class="menu-title"

         data-i18n="Dashboard">Jobs</span></a>

      </li>



      <li class="bold"><a class="waves-effect waves-cyan " href="{{ url('admin/certificate-forms')}}">



        <img src="{{asset('app-assets/images/icon/2.png')}}" alt="avatar">



        <span class="menu-title" data-i18n="Templates">Certificates & Forms</span></a>

      </li>



      <li class="bold"><a class="waves-effect waves-cyan " href="{{ url('admin/part-cost')}}">

         <img src="{{asset('app-assets/images/icon/5.png')}}" alt="avatar">

         <span class="menu-title" data-i18n="Templates">Parts & Costs</span></a>

      </li>



      



      <li class="bold">

         <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">

            <img src="{{asset('app-assets/images/icon/financials.png')}}" alt="avatar">

            <span class="menu-title"

            data-i18n="Templates">Financials</span></a>

         <div class="collapsible-body">

            <ul class="collapsible collapsible-sub" data-collapsible="accordion">

               <li><a class="waves-effect waves-cyan" href="{{ url('admin/allquotes')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Quotes </span></a>

               </li>



               <li><a class="waves-effect waves-cyan" href="{{ url('admin/invoices')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Invoices </span></a>

               </li>



               <li><a class="waves-effect waves-cyan" href="{{ url('admin/payment')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Payments </span></a>

               </li>



               <li><a class="waves-effect waves-cyan" href="{{ url('admin/purchaseorder')}}"><i

                  class="material-icons">radio_button_unchecked</i><span data-i18n="Vertical">Purchase Orders</span></a>

               </li>

               

               

            </ul>

         </div>

      </li>



      <li class="bold"><a class="waves-effect waves-cyan " href="{{ url('admin/my-team')}}"><i

         class="material-icons">person_pin</i><span class="menu-title" data-i18n="Templates">My Team</span></a>

      </li>



      



      



      <li class="bold">

         <a class="waves-effect waves-cyan " href="{{ url('admin/reports')}}">

            <img src="{{asset('app-assets/images/icon/icons8-accounting-30.png')}}" alt="avatar">

            <!-- <i

               class="material-icons">exit_to_app</i> -->

            <span class="menu-title"

               data-i18n="Templates">Reports</span>

         </a>

      </li>



      



      



      <li class="bold">

         <a class="waves-effect waves-cyan " href="{{ url('admin/setting')}}">

            <img src="{{asset('app-assets/images/icon/7.png')}}" alt="avatar">

           

            <span class="menu-title"

               data-i18n="Templates">Setting</span>

         </a>

      </li>

   </ul>

   <div class="navigation-background"></div>

   <a

      class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"

      href="#" data-target="slide-out"><i class="material-icons">menu</i></a>

</aside>