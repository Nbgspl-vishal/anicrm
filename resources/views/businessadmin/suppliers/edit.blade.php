@extends('layouts.ani')



@section('title')

Update Supplier

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

                           <form method="post" action="{{ route('suppliers.update' , $supplier->id) }}">
                              @csrf
                              @method('put')

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

                                          <label for="">Supplier Name<span class="r-f">*</span></label>

                                          <input type="text" required="" name="supplier_name" value="{{ $supplier->supplier_name }}" />

                                          @error('supplier_name')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Supplier Reference Number<span class="r-f">*</span></label>

                                          <input type="text" required=""  name="reference_number" value="{{ $supplier->reference_number }}"/>
                                          @error('reference_number')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                         

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Tags<span class="r-f">*</span></label>
                                          @php
                                             $tags = [];
                                             if($supplier->tags != "" || $supplier->tags != null){
                                                $tags = explode("," , $supplier->tags);
                                             }
                                          @endphp
                                          <select class="select2 browser-default" multiple="multiple" required="" name="tags[]">

                                             <option @if(in_array("Test Data" , $tags)) selected @endif>Test Data</option>
                                             <option @if(in_array("Test Data1" , $tags)) selected @endif>Test Data1</option>
                                             <option @if(in_array("Test Data2" , $tags)) selected @endif>Test Data2</option>

                                           </select>
                                           @error('tags')
                                              <span class="msg-span">{{ $message }}</span>
                                           @enderror                               

                                       </div>

                                    </div>

                                   



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Address<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="100" name="address" value="{{ $supplier->address }}" />
                                          @error('address')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">City / Town<span class="r-f">*</span></label>

                                          <input type="text" maxlength="50" required="" name="city" value="{{ $supplier->city }}"/>
                                          @error('city')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Country<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="50" name="country" value="{{ $supplier->country }}" />
                                          @error('country')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">Post Code<span class="r-f">*</span></label>

                                          <input type="text"  maxlength="6" name="post_code" value="{{ $supplier->post_code }}"/>
                                          @error('post_code')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror

                                       </div>

                                    </div>



                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone Number<span class="r-f">*</span></label>

                                          <input type="text" required="" minlength="8" maxlength="30" name="telephone_number" value="{{ $supplier->telephone_number }}" />
                                          @error('telephone_number')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror

                                       </div>



                                       <div class="input-field col s12 m6">

                                          <label for="">Supplier Type<span class="r-f">*</span></label>

                                          <div style="display: flex;">

                                             <select class="browser-default" name="supplier_type" required="">

                                                <option @if($supplier->supplier_type == "Landlord") selected @endif value="Landlord">Landlord</option>

                                                <option  @if($supplier->supplier_type == "Tenant") selected @endif value="Tenant">Tenant</option>

                                                <option  @if($supplier->supplier_type == "Domestic") selected @endif value="Domestic">Domestic</option>

                                                <option  @if($supplier->supplier_type == "Commercial") selected @endif value="Commercial">Commercial</option>

                                             </select>
                                             @error('supplier_type')
                                              <span class="msg-span">{{ $message }}</span>
                                             @enderror

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

                                          <label for="">First Name<span class="r-f">*</span></label>

                                          <input type="text" name="first_name" required=""  maxlength="50" id="first_name" value="{{ $supplier_contact->first_name }}" />
                                          @error('first_name')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name<span class="r-f">*</span></label>

                                          <input type="text"  maxlength="25" required="" name="last_name" id="last_name" value="{{ $supplier_contact->last_name }}" />
                                          @error('last_name')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="30" minlength="8" name="telephone" id="telephone" value="{{ $supplier_contact->telephone }}" />
                                          @error('telephone')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email<span class="r-f">*</span></label>

                                          <input type="email" required="" maxlength="50" name="email" id="email" value="{{ $supplier_contact->email }}" />
                                          @error('email')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Job Position<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="50" name="job_position" id="job_position" value="{{ $supplier_contact->job_position }}" />
                                          @error('job_position')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

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

                                          <label for="">First Name<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="50" id="i_first_name" name="i_first_name" value="{{ $supplier_invoice_contact->first_name }}"/>
                                          @error('i_first_name')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                        

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Last Name<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="50" name="i_last_name" id="i_last_name" value="{{ $supplier_invoice_contact->last_name }}" />
                                          @error('i_last_name')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12 m6">

                                          <label for="">Telephone<span class="r-f">*</span></label>

                                          <input type="text" required="" maxlength="30" minlength="8" name="i_telephone" id="i_telephone" value="{{ $supplier_invoice_contact->telephone }}" />
                                          @error('i_telephone')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                        

                                       </div>

                                       <div class="input-field col s12 m6">

                                          <label for="">Email<span class="r-f">*</span></label>

                                          <input type="email" required="" maxlength="50" name="i_email" id="i_email" value="{{ $supplier_invoice_contact->email }}" />
                                          @error('i_email')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

                                       </div>

                                    </div>

                                    <div class="row">

                                       <div class="input-field col s12">

                                          <label for="">Job Position<span class="r-f">*</span></label>

                                          <input type="text" maxlength="50" required="" name="i_job_position" id="i_job_position" value="{{ $supplier_invoice_contact->job_position }}" />
                                          @error('i_job_position')
                                              <span class="msg-span">{{ $message }}</span>
                                          @enderror                                                                       

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
@section('footer')
<style type="text/css">
   .msg-span {
      font-size: 14px;
      color: red;
   }
   .r-f {
      color: red;
   }
</style>
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