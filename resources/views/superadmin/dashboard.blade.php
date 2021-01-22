
@extends('superadmin.layout.superadmin')

@section('title')
Dashbord
@stop

@section('content')

   
   <!-- END: Header-->
  
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
                        
                        <div class="col s12 m6 non-padded">
                           <div class="cutomer-section">
                              <div class="col s12">
                                 <div class="card">
                                    <div class="card-head card-head-text">
                                   Business Admin
                                    </div>
                                    <div class="card-content">
                                       <h6>Active User <span class="float-right">{{$active->count()}}</span></h6>
                                       <h6>Inactive User <span class="float-right">{{$inactive->count()}}</span></h6>
                                       <h6>All User <span class="float-right">{{$all->count()}}</span></h6>
                                    
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