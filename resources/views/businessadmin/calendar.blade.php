@extends('businessadmin.layouts.ani')




@section('title')

Dashbord

@stop



@section('content')

    <!-- BEGIN: Page Main-->  

    <div id="main">

        <div class="row">

            <div class="col s12">

                <div class="container">

                    <div class="section">

                        <!-- table listing row -->

                        <div class="listing-container">

                            <div class="row">

                                <div class="col s12">

                                    <div class="listing-header">

                                       <h5 class="web-head">Calendar</h5>

                                       <div class="action-btns calenderbtn">

                                          

                                          <a class="waves-effect waves-light btn modal-trigger" href="#modal1"><span><i class="fa fa-plus"

                                             aria-hidden="true"></i></span></a>

                                          <a class="waves-effect waves-light btn modal-trigger" href="#modal2"><span><i class="fa fa-user"

                                             aria-hidden="true"></i></span></a>

                                       </div>

                                    </div>

                                </div>

                            </div>



                            <div id="app-calendar">

                            <div class="row">

                                <div class="col s12" style="display: none;">

                                    <div class="card">

                                        <div class="card-content">

                                            <div id="basic-calendar" ></div>

                                        </div>

                                    </div>

                                </div>

                                <div class="col s12">

                                    <div class="card">

                                        <div class="card-content">

                                            <div class="row">

                                                <div class="col m12 s12">

                                                    <div id='fc-external-drag'></div>

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

 

  <!-- Modal Structure -->

      <div id="modal1" class="modal btn-modal">

        <div class="modal-content">

          <ul>

              <li>

                  <a href="#" class="modal-app-btn">Appointment</a>

                  <a href="#" class="modal-app-btn">Reminder</a>

                  <a href="#" class="modal-app-btn2">Cancel</a>

              </li>

          </ul>

        </div>

      </div>







      <div id="modal2" class="modal showdiaries-modal">



        <div class="modal-header">

            <h2>Show Diaries</h2>

                <a  class="closebtn modal-close"><i class="fa fa-times"></i></a>

        </div>

        <div class="modal-content">



            <div class="row">

                <div class="col s12">

                    <div class="modal-show-body">

                        <h4>Main User</h4>

                        <h5>

                            <span class="user-name">RK</span>Ravi Kant

                            <span class="right-data-float-right">

                                

                              <div class="switch">

                                <label>

                                  Off

                                  <input type="checkbox">

                                  <span class="lever"></span>

                                  On

                                </label>

                              </div>

                            </span>

                        </h5>

                    </div>

                </div>

            </div>



          

          <div class="row">

              <div class="col s12 m6 l4">

                  <a href="#" class="modal-app-btn"><i class="fa fa-check"></i> Select all</a>

              </div>

              <div class="col s12 m6 l4">

                  <a href="#" class="modal-app-btn2"><i class="fa fa-times"></i> Select None</a>

              </div>

              <div class="col s12 m6 l4">

                  <a href="#" class="modal-app-btn"><i class="fa fa-check"></i> Save</a>

              </div>

          </div>

        </div>

      </div>

    <!-- BEGIN: Footer-->

  @stop