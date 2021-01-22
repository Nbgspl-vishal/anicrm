@extends('businessadmin.layouts.ani')




@section('title')

Dashbord

@stop



@section('content')

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

                        <div class="s12">

                           <div class="card">

                              <div class="card-head">Add New Media</div>

                              <div class="card-content">

                                 <div class="row">

                                    <div class="col l4 m4 s12">

                                       <div class="media-add-btn">

                                          <span class="btn btn-file btn-block">

                                             Upload<input type="file">

                                          </span>

                                       </div>

                                    </div>



                                    <div class="col l4 m4 s12">

                                       <div class="media-add-btn">

                                          <span class="btn btn-file btn-block">

                                             <i class="fa fa-google"></i> Google Drive<input type="file">

                                          </span>

                                       </div>

                                    </div>



                                    <div class="col l4 m4 s12">

                                       <div class="media-add-btn">

                                          <span class="btn btn-file btn-block">

                                             <i class="fa fa-dropbox"></i> Dropbox<input type="file">

                                          </span>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

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



   

   <!-- END: Page Main-->

   <!-- BEGIN: Footer-->
  @stop