@extends('businessadmin.layouts.ani')




@section('title')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
 @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{{ $message }}</strong>
                        </div>
                        @endif                
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                  <!-- add form layout row -->

                  <div class="listing-container form-container">

                     <div class="row">

                        <div class="listing-header addhead-text">

                           <h5 class="web-head">Add Customer</h5>

                        </div>

                        <div class="add-form">

                           <form action="{{url('addcustomer1')}}" method="post">
                           @csrf
                              <div class="card form-card">

                                 <div class="card-content">

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="name2" class="active">Find Address to Populate All Fields</label>

                                          <input type="text" id="search"  placeholder="Type Address, Company name, Postcode...."/>                                                                

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              

                              <div class="card form-card">

                                 <div class="card-head card-head-text">

                                    Customer Information

                                 </div>

                                 <div class="card-content">

                                    <div class="row">

                                       <div class="input-field col s12 ">

                                          <label for="">Customer Name</label>

                                          <input type="text" required="" name="customer_name" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Customer Reference Number</label>

                                          <input type="text" required=""  name="reference_number" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Tag</label>

                                          <select class="select2 browser-default" multiple="multiple" required="" name="tag">

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

                                          <input type="text" required="" maxlength="100" name="address" />

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">City / Town </label>

                                          <input type="text" maxlength="50" required="" name="city" />

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Country </label>

                                          <input type="text" required="" maxlength="50" name="country" />

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">Post Code</label>

                                          <input type="text" required="" maxlength="" name="post_code" />

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone Number </label>

                                          <input type="text" required="" minlength="8" maxlength="30" name="telephone_number" />

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">Customer Type </label>

                                          <div style="display: flex;">

                                             <select class="browser-default" name="customer_type">
<option required >Select</option>

                                                <option value="landlord">Landlord</option>

                                                <option value="tenant">Tenant</option>

                                                <option value="domestic">Domestic</option>

                                                <option value="commercial">Commercial</option>

                                             </select>

                                             <span class="addmoretext-field">+</span> 

                                          </div>

                                          <div class="add-field-text" style="display: none;">

                                                <div style="display: flex;">

                                                   <input type="text" placeholder="Add Customer" name="add_customer" />

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

                                          <input type="text" name="first_name" required=""  maxlength="50" id="first_name" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name</label>

                                          <input type="text" maxlength="25" required="" name="last_name" id="last_name" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone</label>

                                          <input type="text" required="" maxlength="30" minlength="8" name="telephone" id="telephone" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email</label>

                                          <input type="email" required="" maxlength="50" name="email" id="email" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Job Position</label>

                                          <input type="text" required="" maxlength="50" name="job_position" id="job_position" />                                                                       

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

                                          <input type="checkbox"  class="checkbox" id="samedetailcontact" /> 

                                          <label for="samedetailcontact">Use same detail as main contact?</label>

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">First Name</label>

                                          <input type="text" required="" maxlength="50" id="i_first_name" name="i_first_name" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name</label>

                                          <input type="text" required="" maxlength="50" name="i_last_name" id="i_last_name" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone</label>

                                          <input type="text" required="" maxlength="30" minlength="8" name="i_telephone" id="i_telephone" />                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email</label>

                                          <input type="email" required="" maxlength="50" name="i_email" id="i_email" />                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Job Position</label>

                                          <input type="text" maxlength="50" required="" name="i_job_position" id="i_job_position" />                                                                       

                                       </div>

                                    </div>

                                 </div>

                              </div>



                              

                              <div class="form-submit">

                                 <button type="submit" class="btn">Save</button>

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
@section('footer')
<script type="text/javascript">
 $(document).ready(function(){
    $("#samedetailcontact").on("click", function(){
         if (this.checked) { 
                $("#i_first_name").val($("#first_name").val());
                $("#i_last_name").val($("#last_name").val());
                $("#i_email").val($("#email").val());                         
                $("#i_telephone").val($("#telephone").val());                         
                $("#i_job_position").val($("#job_position").val());                         
    }
    else {
        $("#i_first_name").val('');
        $("#i_last_name").val('');
        $("#i_email").val('');           
        $("#i_telephone").val('');           
        $("#i_job_position").val('');           
    }
    });
});
</script>

@stop