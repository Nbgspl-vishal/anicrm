
@extends('superadmin.layout.superadmin')

@section('title')
Payment
@stop

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
                                    <h5 class="web-head">Payment</h5>
                                    <div class="action-btns">
                                        
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-print"
                                                    aria-hidden="true"></i>Print</span></a>
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-download"
                                                    aria-hidden="true"></i>Import</span></a>
                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-upload"
                                                    aria-hidden="true"></i>Export</span></a>
                                    </div>
                                </div>
                                <div class="listing-filters">
                                    <div class="card">
                                        <div class="card-content">
                                            
                                            <div class="col s12 m6">
                                                <form class="web-form">
                                                    <div class="formfield">
                                                        <label>
                                                            Search Payment
                                                        </label>
                                                        <input type="text"
                                                            placeholder="Name / Address / Contact Details / Reference" />
                                                    </div>
                                                    
                                                    
                                                </form>

                                            </div>
                                            <div class="filters-buttons">
                                                <a class="waves-effect waves-light btn transparent-background-btn"><span><i
                                                            class="fas fa-redo-alt"></i>Reset
                                                        filter</span></a>
                                                <a class="waves-effect waves-light btn transparent-background-btn"><span><i
                                                            class="fa fa-search" aria-hidden="true"></i>
                                                        Search</span></a>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="listing-table">
                                    <div class="card">
                                        <div class="listing-table-tab">
                                            <ul>
                                                <li class="active-list" id="lat"><a href="#">Active <span
                                                            class="list-count">(3)</span></a>
                                                </li>
                                                <li id="lst"><a href="#">Archived <span class="list-count"></span></a>
                                                </li>
                                                <li id="lalt"><a href="#">All <span class="list-count">(3)</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="listing-tab-content">
                                            <div id="latt" class="listing-tab-content-section active-table">
                                                <div class="card-head">
                                                    Active
                                                </div>
                                                <div class="card-content">
                                                        <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone no.</th>
                                                                    <th>Amount</th>
                                                                    <th>Method</th>
                                                                    <th>Transaction ID</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               
                                                            </tbody>

                                                        </table>
                                                </div>
                                            </div>
                                            <div style="display:none;" id="lstt"
                                                class="listing-tab-content-section suspended-table">
                                                <div class="card-head">
                                                    Suspended
                                                </div>
                                                <div class="card-content">
                                                    <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone no.</th>
                                                                    <th>Amount</th>
                                                                    <th>Method</th>
                                                                    <th>Transaction ID</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               
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
                                                    <table id="" class="dat_table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Phone no.</th>
                                                                    <th>Amount</th>
                                                                    <th>Method</th>
                                                                    <th>Transaction ID</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
                                                               </tr>

                                                               <tr>
                                                                   <td>Ravi</td>
                                                                   <td>example@gmail.com</td>
                                                                   <td>1234567980</td>
                                                                   <td>5685</td>
                                                                   <td>UPI</td>
                                                                   <td>#123654789st</td>
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