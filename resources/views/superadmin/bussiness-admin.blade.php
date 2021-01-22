
@extends('superadmin.layout.superadmin')

@section('title')
Bussiness Admin
@stop

<style type="text/css">
   .dataTables_scroll2 #example_filter{
   display:none;
}

.dt-buttons{
   display: none;
}

.dataTables_scroll2 .dataTables_info{
   display: none;
}

.dataTables_scroll2 .dataTables_paginate{
   display: none;
}
</style>

@section('content')
   <!-- END: SideNav-->
   <!-- BEGIN: Page Main-->
   <div id="main">
      <div class="row">
         <div class="col s12">
            <div class="container">
               <div class="section">
                  <!-- table listing row -->
                  <div class="listing-container">
                     <div class="row">
                        <div class="listing-header">
                           <h5 class="web-head">Bussiness Admin</h5>
                           <div class="action-btns">
                              <a class="waves-effect waves-light btn add-list-btn" href="{{url('package')}}"><span><i class="fa fa-plus" aria-hidden="true"></i>Add Bussiness Admin</span></a>
                              <a id="btnPrint" class="waves-effect waves-light btn"><span><i class="fa fa-print"
                                 aria-hidden="true"></i>Print</span></a>
                            
                             
                           </div>
                        </div>
                      
                        <div class="listing-table">
                           <div class="card">
                              <div class="listing-table-tab">
                                 <ul>
                                    <li class="active-list" id="lat"><a href="#">Active User<span
                                       class="list-count">({{$active->count()}})</span></a>
                                    </li>
                                    <li id="lst"><a href="#">Inactive User<span class="list-count">({{$inactive->count()}})</span></a>
                                    </li>
                                    <li id="lalt"><a href="#">All <span class="list-count">({{$all->count()}})</span></a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="listing-tab-content">
                                 <div id="latt" class="listing-tab-content-section active-table">
                                    <div class="card-head">
                                       Active
                                    </div>
                                    <div class="card-content">
                                       <table id="example" class="dat_table">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone no.</th>                                   
                                               
                                                <th>Permission</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($active as $active1)
                                             <tr>
                                                <td>{{$active1->name}}</td>
                                                <td>{{$active1->email}}</td>
                                                <td>{{$active1->mobile}}</td>
                                             
                                                <td>
                                                    <a href="{{url('user-permission/'.$active1->id)}}" class="btn btn-info btn-sm">Permission</a>
                                                </td>
                                              @if($active1->status==1)
                                                <td>
                                                   <a href="{{url('user-block/'.$active1->id)}}" class="btn btn-info btn-sm">Block</a>
                                                </td>
                                                @elseif($active1->status==3)
                                                <td>
                                                   <a href="{{url('user-unblock/'.$active1->id)}}" class="btn btn-info btn-sm">Unblock</a>
                                                </td>
                                                @endif
                                                <td>                                                 
                                                   <a href="{{url('edit-bussiness-admin/'.$active1->id)}}"class="edit">
                                                   <i class="fa fa-edit"></i>
                                                   </a> |
                                                   <a href="{{url('delete-bussiness-admin/'.$active1->id)}}" class="delete">
                                                   <i class="fa fa-trash"></i>
                                                   </a>
                                                </td>
                                           </tr>
                                           @endforeach
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div style="display:none;" id="lstt"
                                    class="listing-tab-content-section suspended-table">
                                    <div class="card-head">
                                       Blocked User
                                    </div>
                                    <div class="card-content">
                                       <table id="example" class="dat_table">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone no.</th>
                                               
                                               
                                                <th>Permission</th>
                                               
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                              @foreach($inactive as $inactive1)
                                             <tr>
                                                <td>{{$inactive1->name}}</td>
                                                <td>{{$inactive1->email}}</td>
                                                <td>{{$inactive1->mobile}}</td>
                                             
                                                <td>
                                                    <a href="{{url('user-permission'.$inactive1->id)}}" class="btn btn-info btn-sm">Permission</a>
                                                </td>
                                             
                                                <td>
                                                 
                                                    <a href="{{url('edit-bussiness-admin/'.$inactive1->id)}}"class="edit">
                                                   <i class="fa fa-edit"></i>
                                                   </a> |
                                                   <a href="{{url('delete-bussiness-admin/'.$inactive1->id)}}" class="delete">
                                                   <i class="fa fa-trash"></i>
                                                   </a>
                                                </td>
                                           </tr>
                                           @endforeach
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <div style="display:none;" id="laltt"
                                    class="listing-tab-content-section all-table">
                                    <div class="card-head">
                                       All
                                    </div>
                                    <div class="card-content">
                                       <table id="example" class="dat_table">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone no.</th>
                                              
                                               
                                                <th>Permission</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($all as $all1)
                                             <tr>
                                                <td>{{$all1->name}}</td>
                                                <td>{{$all1->email}}</td>
                                                <td>{{$all1->mobile}}</td>
                                             
                                                <td>
                                                    <a href="{{url('user-permission/'.$all1->id)}}" class="btn btn-info btn-sm">Permission</a>
                                                </td>
                                                @if($all1->status!=2 && $all1->status!=3)
                                                <td>
                                                   <a href="{{url('user-block/'.$all1->id)}}" class="btn btn-info btn-sm">Block</a>
                                                </td>
                                                @elseif($all1->status==3)
                                                <td>
                                                   <a href="{{url('user-unblock/'.$all1->id)}}" class="btn btn-info btn-sm">Unblock</a>
                                                </td>
                                                @endif
                                                <td>
                                                   <a href="{{url('edit-bussiness-admin/'.$all1->id)}}"class="edit">
                                                       <i class="fa fa-edit"></i>|
                                                  <a href="{{url('delete-bussiness-admin/'.$all1->id)}}" class="delete">
                                                   <i class="fa fa-trash"></i>
                                                   </a>
                                                </td>
                                           </tr>
                                           @endforeach
                                          </tbody>
                                       </table>
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
   <!-- BEGIN: Footer-->
   @stop
   @section('footer')

<!--     <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" ></script> -->
 <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" ></script>  
   <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js" ></script>
   
   <script>
       $('.delete').click(function(){
        $(this).parent().parent().remove();
       });
   </script>

  <script type="text/javascript">
   $(document).on('click', '#btnPrint', function(){
   $(".buttons-print")[0].click(); //trigger the click event
});
   </script>
   <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
} );
   </script>
  
@stop