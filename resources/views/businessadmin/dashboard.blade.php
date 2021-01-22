@extends('businessadmin.layouts.ani')

@section('title')
Dashbord
@stop

@section('content')
   <!-- BEGIN: SideNav-->
  
   <!-- END: SideNav-->
   <!-- BEGIN: Page Main-->  
   <div id="main">
      <div class="row">
         
         <div class="col s12 body-content-container">
            <div class="container">
               <div class="section">
                  <!--dashboard container layout row -->
                  <div class="dashboard-containe body-content-container">
                     <!-- <div class="welcome-container">
                        <div class="card">
                                <div class="card-content">
                                        <p>Lorem ipsum dummy text lorem inpsum dummy text lorem insum dummy text lorem ipsum dummy text
                                        </p>
                                </div>
                        </div>
                        </div> -->
                        
                           <div class="col s12">
                              <div class="listing-header addhead-text">
                           <h5 class="web-head">Dashboard </h5>
                        </div>
                           </div>
                        
                     <div class="half-sections">
                        <div class="col s12 m6">
                           <div class="top-job-section">
                              <div class="">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                       Quick Actions
                                    </div>
                                    <div class="card-content quick-btn">
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="alljobs.php"><i class="fa fa-plus tag1"></i>New Job</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="allcustomer.php"><i class="fa fa-plus tag2"></i>New Contact</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="allquotes.php"><i class="fa fa-plus tag3"></i>New Quote</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="invoices.php"><i class="fa fa-plus tag4"></i>New Invoice</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="#"><i class="fa fa-plus tag5"></i>New Cost</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="#"><i class="fa fa-plus tag6"></i>New Note</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="#"><i class="fa fa-plus tag7"></i>New Appointment</a>
                                          </div>
                                       </div>
                                       <div class="col s12 m6">
                                          <div class="quick-btn1 mb-10">
                                             <a href="#"><i class="fa fa-plus tag8"></i>New Certificate </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col s12 m6">
                           <div class="cutomer-section">
                              <div class="">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                       Events
                                    </div>
                                    <!-- <div class="card-content first-show">
                                       <div class="agenda-btn">
                                           <a href="#" class="leftbtn">Diary</a>
                                           <a href="#" class="rightbtn">View Unplanned</a>
                                       </div>
                                       
                                       
                                       <div class="img-date pt-5">
                                           <img src="../app-assets\images/d1.jpg">
                                           <p>Look like your schedule is empty.</p>
                                       </div>
                                       
                                       <div class="col s12 m6">
                                           <div class="cal-btn mt-10">
                                               <a href="allcustomer.php">Create new appointment</a>
                                           </div>
                                       </div>
                                       
                                       <div class="col s12 m6">
                                           <div class="cal-btn mt-10">
                                               <a href="allcustomer.php">Create new Reminder</a>
                                           </div>
                                       </div>
                                       </div> -->
                                    <div class="card-content second-show">
                                       <div class="slider-col">
                                          <div id="news-slider" class="owl-carousel">
                                             <div class="post-slide">
                                                <h5><i class="material-icons">event</i> <span>06-10-20 12:30:00</span></h5>
                                                <h5><span>Hello</span></h5>
                                                <hr>
                                                <p><i class="material-icons">person</i>John Appleseed</p>
                                                <p><i class="material-icons">add_location</i>                        TRADITIONAL COUNTY, BIG CITY, LITTLE COTTAGE, 17 HIGH STREET, CRAFTY VALLEY, UNITED KINGDOM                    </p>
                                             </div>
                                             <div class="post-slide">
                                                <h5><i class="material-icons">event</i> <span>06-10-20 12:30:00</span></h5>
                                                <h5><span>Hello</span></h5>
                                                <hr>
                                                <p><i class="material-icons">person</i>John Appleseed</p>
                                                <p><i class="material-icons">add_location</i>                        TRADITIONAL COUNTY, BIG CITY, LITTLE COTTAGE, 17 HIGH STREET, CRAFTY VALLEY, UNITED KINGDOM                    </p>
                                             </div>
                                          </div>
                                          <p class="status">1/3</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="top-three-section">
                        <div class="col s12 m4">
                           <div class="card">
                              <div class="card-head card-head-text">
                                 Job Overview
                              </div>
                              <div class="card-content">
                                 <ul>
                                    <li>Jobs to book in
                                       <span>(3)</span>
                                    </li>
                                    <li>Jobs scheduled
                                       <span>(9)</span>
                                    </li>
                                    <li>Jobs completed
                                       <span>(10)</span>
                                    </li>
                                    <li><b>Total jobs to date</b>
                                       <span>(25)</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col s12 m4">
                           <div class="card">
                              <div class="card-head card-head-text">
                                 Quotes Overview
                              </div>
                              <div class="card-content">
                                 <ul>
                                    <li>Jobs to quote for
                                       <span>(3)</span>
                                    </li>
                                    <li>Quotes sent
                                       <span>(9)</span>
                                    </li>
                                    <li>Quotes accepted
                                       <span>(10)</span>
                                    </li>
                                    <li><b>Total quotes to date</b>
                                       <span>(25)</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="col s12 m4">
                           <div class="card">
                              <div class="card-head card-head-text">
                                 Invoices overview
                              </div>
                              <div class="card-content">
                                 <ul>
                                    <li>Jobs to invoice
                                       <span>(3)</span>
                                    </li>
                                    <li>Invoices sent
                                       <span>(9)</span>
                                    </li>
                                    <li>Invoices paid
                                       <span>(10)</span>
                                    </li>
                                    <li><b>Total invoices to date</b>
                                       <span>(25)</span>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="job-trends">
                        <div class="col s12">
                           <div class="card">
                              <div class="card-head card-head-text">
                                 Job Trends
                              </div>
                              <div class="card-content">
                                 <canvas id="job-trands" width="256" height="256"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="half-sections">
                        <div class="col s12 m6 non-padded">
                           <div class="top-job-section">
                              <div class="col s12">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                       Top Jobs Type
                                    </div>
                                    <div class="card-content">
                                       <canvas id="topjob" width="256" height="256"></canvas>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col s12 m6 non-padded">
                           <div class="cutomer-section">
                              <div class="col s12">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                       Top Customers
                                    </div>
                                    <div class="card-content">
                                       <canvas id="topcustomers" width="256" height="256"></canvas>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="side-by-side-sections">
                        <div class="col s12 m6">
                           <div class="compare-section">
                              <div class="">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                       Outstanding jobs vs Completed jobs
                                    </div>
                                    <div class="card-content">
                                       <div class="col s12 m4">
                                          <a href="#">
                                             <h5 class="card-inner-title">Today</h5>
                                          </a>
                                          <canvas id="camparechart" width="256" height="256"></canvas>
                                       </div>
                                       <div class="col s12 m4">
                                          <a href="#">
                                             <h5 class="card-inner-title">Last 7 days</h5>
                                          </a>
                                          <!-- <canvas id="comparechart2" width="256" height="256"></canvas> -->
                                       </div>
                                       <div class="col s12 m4">
                                          <a href="#">
                                             <h5 class="card-inner-title">Last 30 days</h5>
                                          </a>
                                          <!-- <canvas id="comparechart3" width="256" height="256"></canvas> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col s12 m6">
                           <div class="compare-section">
                              <div class="">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                       Progress tracker
                                    </div>
                                    <div class="card-content">
                                       <div class="card-body">
                                          <h4 class="small">
                                             Dummy task 1
                                             <span class="float-right font-weight-bold">20%</span>
                                          </h4>
                                          <div class="progress mb-4">
                                             <div class="progress-bar bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h4 class="small">
                                             Dummy task 2
                                             <span class="float-right font-weight-bold">40%</span>
                                          </h4>
                                          <div class="progress mb-4">
                                             <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                          <h4 class="small">
                                             Dummy task 4
                                             <span class="float-right font-weight-bold">60%</span>
                                          </h4>
                                          <div class="progress mb-4">
                                             <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--dashboard container layout row -->
               </div>
            </div>
            <div class="content-overlay"></div>
         </div>
      </div>
   </div>
   <!-- END: Page Main-->
   <!-- BEGIN: Footer-->
 @stop 