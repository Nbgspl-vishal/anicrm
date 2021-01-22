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

                        <!-- <div class="listing-header addhead-text">

                           <h5 class="web-head">Add Certificates & Forms </h5>

                           </div> -->

                        <!-- <div class="add-form">

                           <form>

                              

                              <div class="card form-card">

                                 <div class="card-head card-head-text">

                                    Certificates & Forms Detail

                                 </div>

                                 <div class="card-content">

                           

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">First Name</label>

                                          <input type="text">

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name</label>

                                          <input type="text">

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Role</label>

                                          <select class="browser-default">

                                             <option>Select Role</option>

                                             <option>Role 1</option>

                                             <option>Role 2</option>

                                          </select>    

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email ID</label>

                                          <input type="email" />                                                                                

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Telephone</label>

                                          <input type="text" />

                                       </div>

                                    </div>

                           

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Joining Date</label>

                                          <input type="date" />

                                       </div>

                           

                                       <div class="input-field col s12 m6">

                                          <label for="">Complete Date</label>

                                          <input type="date" >

                                       </div>

                                    </div>

                           

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Description</label>

                                          <textarea></textarea>

                                       </div>

                                    </div>

                           

                                 </div>

                              </div>

                            

                              <div class="form-submit">

                                 <button class="btn">Save</button>

                                 <button class="btn">Cancel</button>

                              </div>

                           </form>

                           </div> -->

                        <div class="card form-card">

                           <div class="card-head card-head-text">

                              Forms and Certificates

                           </div>

                           <div class="card-content">

                              <p>Choose from number of popular forms or certificates.</p>

                              <p>Complete, file and send to your customers directly from Anicrm now.</p>

                              <div class="row">

                                 <div class="input-field col s6 mt-2">

                                    <input type="text" placeholder="Search from a form or certificates...">

                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="row">

                           <div class="col s12">

                              <div class="container">

                                 <div class="section">

                                    <!-- table listing row -->

                                    <div class="listing-container">

                                       <div class="row">

                                          <div class="listing-table">

                                             <div class="card certificate-card">

                                                <div class="listing-table-tab">

                                                   <div class="card-head">

                                                      Category

                                                   </div>

                                                   <ul>

                                                      <li class="active-list" id="first"><a href="#">Gas</a>

                                                      </li>

                                                      <li id="second" class=""><a href="#">Plumbing </a>

                                                      </li>

                                                      <li id="third" class=""><a href="#">Legionella Risk Assessment</a>

                                                      </li>

                                                      

                                                   </ul>

                                                </div>

                                                <div class="listing-tab-content">

                                                   <div id="firstt" class="listing-tab-content-section active-table" style="">



                                                      <div class="card-head">

                                                         Gas

                                                      </div>



                                                      <div class="scrollerheight">

                                                         <a href="gas1.php">

                                                            <div class="border-gas-tool">

                                                               <h6>Commercial Catering Inspection Records</h6>

                                                               <p>This sertificate is designed to record the Gas safety checks and works carried out in a commercial catering establishments, as well as the results od testing.</p>

                                                            </div>

                                                         </a>



                                                         <a href="">

                                                            <div class="border-gas-tool">

                                                               <h6>Gas Warning Notice</h6>

                                                               <p>This sertificate can br used to advise on an issue with an existing gas instalattion.</p>

                                                            </div>

                                                         </a>



                                                         <a href="">

                                                            <div class="border-gas-tool">

                                                               <h6>Central Heating Commissioning Certificate</h6>

                                                               <p>To be used by registered gas installers when installing and commissioning a new central heating installation.</p>

                                                            </div>

                                                         </a>



                                                         <a href="">

                                                            <div class="border-gas-tool">

                                                               <h6>Gas Testing and Purging Certificate </h6>

                                                               <p>When a Gas pipe is cut or removed from service it must first be purged. This form allows you to record steps and processes for completing this.</p>

                                                            </div>

                                                         </a>



                                                         <a href="">

                                                            <div class="border-gas-tool">

                                                               <h6>General Installation/Commission and Decommission</h6>

                                                               <p>The record can be complete with the options os installation commissioning, decommissioning, with in defferent markets such as domestic, commercial or categoring.</p>

                                                            </div>

                                                         </a>

                                                      </div>



                                                      

                                                   </div>

                                                   <div style="display: none;" id="secondt" class="listing-tab-content-section suspended-table">



                                                      <div class="card-head">

                                                         Plumbing

                                                      </div>



                                                      <div class="scrollerheight">

                                                         <a href="plumbing1.php">

                                                            <div class="border-gas-tool">

                                                               <h6>Central Heating Powerflush Checklist</h6>

                                                               <p>This checklist can be used to document a radiator system powerflush, as well as before and after thermal readings.</p>

                                                            </div>

                                                         </a>



                                                         <a href="">

                                                            <div class="border-gas-tool">

                                                               <h6>Domedtic Unvented Hot Water Commissioning/Inspection Records</h6>

                                                               <p>This record can be used to log the results of an unvented hot water vessel's commissioning/inspection.</p>

                                                            </div>

                                                         </a>



                                                         <a href="">

                                                            <div class="border-gas-tool">

                                                               <h6>Commissioning of Water Pipework Certificate</h6>

                                                               <p>This form can be used inaccordance with BS 8558:2015 to record the finding of pressure tests performed on hot and cold water suppliers.</p>

                                                            </div>

                                                         </a>

 

                                                         

                                                      </div>

                                                      

                                                   </div>

                                                   <div style="display: none;" id="thirdt" class="listing-tab-content-section all-table">

                                                      <div class="card-head">

                                                         Legionella Risk Assessment Form

                                                      </div>



                                                      <div class="scrollerheight">

                                                         <a href="legionella1.php">

                                                            <div class="border-gas-tool">

                                                               <h6>Legionella Risk Assessment Form</h6>

                                                               <p>This form can be used to document the results of Legionella Risk Assessment for domestic and non domestic properties.</p>

                                                            </div>

                                                         </a>



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