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

                        <!-- table listing row -->

                        <div class="listing-container">

                            <div class="row">

                                <div class="listing-header">

                                    <h5 class="web-head">Invoices</h5>

                                    <div class="action-btns">

                                        <a class="waves-effect waves-light btn add-list-btn" href="creategroupedinvoice.php"><span><i class="fa fa-plus"

                                 aria-hidden="true"></i>Create Invoices</span></a>

                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-print"

                                                    aria-hidden="true"></i>Print</span></a>

                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-upload"

                                                    aria-hidden="true"></i>Export</span></a>

                                    </div>

                                </div>

                                <div class="listing-filters">

                                    <div class="card">

                                        <div class="card-content">

                                            <p class="filter-btn">

                                                <span class="hide-filter">Hide filter</span>

                                                <span class="show-filter">Show filter</span>

                                            </p>

                                            <div class="col s12">

                                                <form class="web-form">

                                                    <div class="formfield col s12 m6">

                                                        <label>

                                                            Search Customers

                                                        </label>

                                                        <input type="text"

                                                            placeholder="Customer / Site / Address / Account no. / Order no. / Job no. / PPM Contract" />

                                                    </div>

                                                    <div class="formfield col s12 m3">

                                                        <label>

                                                            Start Date

                                                        </label>

                                                        <input type="text" />

                                                    </div>

                                                    <div class="formfield col s12 m3">

                                                        <label>

                                                            End Date

                                                        </label>

                                                        <input type="text" />

                                                    </div>

                                                    <p>

                                                        <a class="show-advance" href="#">Show advance</a>

                                                        <a class="hide-advance" href="#">Hide advance</a>

                                                    </p>

                                                    <div class="formfield col s12 m6 advance">

                                                        <label>Tag(s)</label>

                                                        <select class="browser-default">

                                                            <option>Please select an option</option>

                                                            <option>Test option 1</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m6 advance">

                                                        <label>Payment Status</label>

                                                        <select class="browser-default">

                                                            <option>Please select an option</option>

                                                            <option>Test option 1</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <input type="checkbox" class="checkbox" />

                                                        <label>Include invoices standard</label>

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <input type="checkbox" class="checkbox" />

                                                        <label>Include PPM invoices</label>                                                       

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <input type="checkbox" class="checkbox" />

                                                        <label>Include customer grouped invoices</label>                                                       

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

                                                <li class="active-list" id="lai"><a href="#">Approved Invoices <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="ldi"><a href="#">Draft Invoices <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lac"><a href="#">Approved Credits <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="ldc"><a href="#">Draft Credits <span class="list-count">(3)</span></a>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="listing-tab-content">

                                            <div id="lait" class="listing-tab-content-section active-table">

                                                <div class="card-head">

                                                    Approved Invoices

                                                </div>

                                                <div class="card-content">                                                   

                                                    <div class="col s12">

                                                        <table id="" class="dat_table">

                                                            <thead>

                                                                <tr>

                                                                    <th>No.</th>

                                                                    <th>Customer Name</th>

                                                                    <th>Site Name</th>

                                                                    <th>Owner</th>

                                                                    <th>Contact</th>

                                                                    <th>Status</th>

                                                                    <th>Date Logged</th>

                                                                    <th>Expiry Date</th>

                                                                    <th>Quote Value</th>

                                                                    <th>Parent Job</th>

                                                                    <th>Description</th>

                                                                    <th>Next Contact Date</th>

                                                                    <th>Contact Telephone</th>

                                                                    <th>Postcode</th>

                                                                    <th>Action</th>

                                                                </tr>

                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td><span class="head-td">M000000</span></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td><a href="invoice-template.php"><i class="fa fa-print"></i></a> / <a href=""><i class="fa fa-file-pdf"></i></a></td>

                                                                </tr>



                                                                <tr>

                                                                    <td><span class="head-td">M000000</span></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td><a href="invoice-template.php"><i class="fa fa-print"></i></a> / <a href=""><i class="fa fa-file-pdf"></i></a></td>

                                                                </tr>



                                                                <tr>

                                                                    <td><span class="head-td">M000000</span></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td><a href="invoice-template.php"><i class="fa fa-print"></i></a> / <a href=""><i class="fa fa-file-pdf"></i></a></td>

                                                                </tr>



                                                                <tr>

                                                                    <td><span class="head-td">M000000</span></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td><a href="invoice-template.php"><i class="fa fa-print"></i></a> / <a href=""><i class="fa fa-file-pdf"></i></a></td>

                                                                </tr>

                                                                

                                                                

                                                                 

                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="ldit"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                   Draft Invoices

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lact"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Approved Credits

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="ldct"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Draft Credits

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

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



@stop