
@extends('superadmin.layout.superadmin')

@section('title')
user Permission
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
                        <div class="listing-header addhead-text">
                           <h5 class="web-head">Permission & Advanced Permission </h5>
                        </div>
                        <div class="add-form">
                            <div class="card form-card">
                                 <div class="card-head card-head-text">
                                    Account type
                                 </div>
                                 <div class="card-content">
                                    
                                    <div class="col s12">
                                    <form action="{{url('updatepermisson')}}" method="post">
                                       @csrf
                                 <div class="permission-box">
                                       <div class="input-field col s12 m12">
                                       
                                          <label>
                                             <input class="with-gap radio-green" checked="" id="default-permission" name="default" {{ ($value=="default")? "checked" : "" }} type="radio" value="default">
                                             <span>Default Permissions</span>
                                          </label> 
                                        
                                          <label>
                                             <input class="with-gap radio-green" id="custom-permission" name="default" type="radio" {{ ($value!="default")? "checked" : "" }} type="radio" value="default" value="custom">
                                             <span>Custom Permissions</span>
                                          </label> 
                                      </div>
                                         <div class="col s12 m12" id="custom-perm" style="display:none;">
                                          <div class="input-field">
                                             <div class="d-block">
                                                <input type="checkbox"  name="custom[chat]" class="checkbox" {{ isset($value->chat)? "checked" : "" }}>
                                                <label>Chat</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Contacts]" class="checkbox" {{ isset($value->Contacts)? "checked" : "" }}>
                                                <label>Contacts</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Jobs]" class="checkbox" {{ isset($value->Jobs)? "checked" : "" }}>
                                                <label>Jobs</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Team]" class="checkbox" {{ isset($value->Team)? "checked" : "" }}>
                                                <label>My Team</label>
                                             </div>
                                             <div class="d-block">
                                                <input type="checkbox" name="custom[Reports]" class="checkbox" {{ isset($value->Reports)? "checked" : "" }}>
                                                <label>Reports</label>
                                             </div>
                                          </div>
                                         </div>
                                       
                                    </div>
                                                            
                                    </form>
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
 @section('footer')


<script>
   $(function(){
     $('input#custom-permission').click(function(){
       if ($(this).is(':checked'))
       {
         $('#custom-perm').show();
       }
       else{
         $('#custom-perm').hide();
       }
     });
     // Default permission
     $('input#default-permission').click(function(){
       if ($(this).is(':checked'))
       {
         $('#custom-perm').hide();
       }
     });
   });

   // 
   </script>
  
 @stop