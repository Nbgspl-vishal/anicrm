@extends('businessadmin.layouts.ani')




@section('title')

Dashbord

@stop



@section('content')

   <div id="main">

      <div class="row">

         <div class="col s12">

            <div class="container">

               <div class="section">

                  <!-- add form layout row -->

                  <div class="listing-container form-container">

                     <div class="row">

                        <div class="listing-header addhead-text">

                           <h5 class="web-head">Add Suppliers</h5>

                        </div>

                        <div class="add-form">

                           <form>

                              <div class="card form-card">

                                 <div class="card-content">

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="name2" class="active">Find Address to Populate All Fields</label>

                                          <input type="text" placeholder="Type Address, Company name, Postcode...."/>                                                                

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              

                              <div class="card form-card">

                                 <div class="card-head card-head-text">

                                    Supplier Information

                                 </div>

                                 <div class="card-content">

                                    <div class="row">

                                       <div class="input-field col s12 ">

                                          <label for="">Supplier Name</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Supplier Reference Number</label>

                                          <input type="text" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Tag</label>

                                          <select class="select2 browser-default" multiple="multiple">

                                             <option selected>Test Data</option>

                                             <option selected>Test Data</option>

                                             <option selected>Test Data</option>

                                             <option selected>Test Data</option>

                                             <option selected>Test Data</option>

                                             <option>Test Data</option>

                                             <option>Test Data</option>

                                           </select>                               

                                       </div>

                                    </div>

                                   



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Address </label>

                                          <input type="text" />

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">City / Town </label>

                                          <input type="text" />

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Country </label>

                                          <input type="text" />

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">Post Code</label>

                                          <input type="text" />

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone Number </label>

                                          <input type="text" />

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">Customer Type </label>

                                          <div style="display: flex;">

                                             <select class="browser-default">

                                                <option>Landlord</option>

                                                <option>Tenant</option>

                                                <option>Domestic</option>

                                                <option>Commercial</option>

                                             </select>

                                             <span class="addmoretext-field">+</span> 

                                          </div>

                                          <div class="add-field-text" style="display: none;">

                                                <div style="display: flex;">

                                                   <input type="text" placeholder="Add Customer" />

                                                   <span class="addmoretext-save">Save</span> 

                                                </div>

                                             </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>



                              <div class="card form-card">

                                 <div class="card-head card-head-text">

                                    Main Contact

                                 </div>

                                 <div class="card-content">

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">First Name</label>

                                          <input type="text" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone</label>

                                          <input type="text" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Job Position</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                 </div>

                              </div>



                              <div class="card form-card">

                                 <div class="card-head card-head-text">

                                    Invoice Contact

                                 </div>

                                 <div class="card-content">



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <input type="checkbox" class="checkbox" id="samedetailcontact" /> 

                                          <label for="samedetailcontact">Use same detail as main contact?</label>

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">First Name</label>

                                          <input type="text" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone</label>

                                          <input type="text" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Job Position</label>

                                          <input type="text" />                                                                       

                                       </div>

                                    </div>

                                 </div>

                              </div>



                              

                              <div class="form-submit">

                                 <button class="btn">Save</button>

                                 <button class="btn">Cancel</button>

                              </div>

                           </form>

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