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
                                <div class="listing-header">
                                    <h5 class="web-head">Listing</h5>
                                    
                                </div>
                                

                                <div class="listing-table">
                                    <div class="card">
                                        
                                        <div class="listing-tab-content">
                                            <div id="lallreportst" class="listing-tab-content-section active-table">
                                                <div class="card-head">
                                                    All Users
                                                </div>
                                                <div class="card-content">                                                   
                                                    <div class="col s12">
                                                        <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                   <th>Name</th>
                                                                   <th>Role</th>
                                                                   <th>Create by</th>
                                                                   <th>Permission</th>
                                                                   <th>Action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td>Ravi Kant</td>
                                                                    <td>Admin</td>
                                                                    <td>12/07/2020</td>
                                                                    <td><a href="user-permission.php" class="btn btn-info btn-sm">Permission</a></td>
                                                                    <td>
                                                                        <a href="user-edit-detail.php" class="text-info"><i class="fa fa-edit"></i></a> | 
                                                                        <a href="#" style="color: red;"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>

                                                                <tr>
                                                                    <td>Ravi Kant</td>
                                                                    <td>Admin</td>
                                                                    <td>12/07/2020</td>
                                                                    <td><a href="user-permission.php" class="btn btn-info btn-sm">Permission</a></td>
                                                                    <td>
                                                                        <a href="user-edit-detail.php" class="text-info"><i class="fa fa-edit"></i></a> | 
                                                                        <a href="#" style="color: red;"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>

                                                                <tr>
                                                                    <td>Ravi Kant</td>
                                                                    <td>Admin</td>
                                                                    <td>12/07/2020</td>
                                                                    <td><a href="user-permission.php" class="btn btn-info btn-sm">Permission</a></td>
                                                                    <td>
                                                                        <a href="user-edit-detail.php" class="text-info"><i class="fa fa-edit"></i></a> | 
                                                                        <a href="#" style="color: red;"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>

                                                                <tr>
                                                                    <td>Ravi Kant</td>
                                                                    <td>Admin</td>
                                                                    <td>12/07/2020</td>
                                                                    <td><a href="user-permission.php" class="btn btn-info btn-sm">Permission</a></td>
                                                                    <td>
                                                                        <a href="user-edit-detail.php" class="text-info"><i class="fa fa-edit"></i></a> | 
                                                                        <a href="#" style="color: red;"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>

                                                                <tr>
                                                                    <td>Ravi Kant</td>
                                                                    <td>Admin</td>
                                                                    <td>12/07/2020</td>
                                                                    <td><a href="user-permission.php" class="btn btn-info btn-sm">Permission</a></td>
                                                                    <td>
                                                                        <a href="user-edit-detail.php" class="text-info"><i class="fa fa-edit"></i></a> | 
                                                                        <a href="#" style="color: red;"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>

                                                                <tr>
                                                                    <td>Ravi Kant</td>
                                                                    <td>Admin</td>
                                                                    <td>12/07/2020</td>
                                                                    <td><a href="user-permission.php" class="btn btn-info btn-sm">Permission</a></td>
                                                                    <td>
                                                                        <a href="user-edit-detail.php" class="text-info"><i class="fa fa-edit"></i></a> | 
                                                                        <a href="#" style="color: red;"><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    
                                                                </tr>
                                                            </tbody>
                                                            
                                                        </table>
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

    <!-- BEGIN: Footer-->

  @stop