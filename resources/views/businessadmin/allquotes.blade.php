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

                                    <h5 class="web-head">All Quotes</h5>

                                    <div class="action-btns">

                                        <a class="waves-effect waves-light btn add-list-btn" href="createquote.php"><span><i class="fa fa-plus"

                                                    aria-hidden="true"></i>Create Quote</span></a>

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

                                                            placeholder="Customer / Site / Contact / Description / Title / Source" />

                                                    </div>

                                                    <div class="formfield col s12 m6">

                                                        <label>

                                                            Status

                                                        </label>

                                                        <select class="browser-default">

                                                            <option>All Jobs</option>

                                                            <option>All Closed</option>

                                                            <option>All Open</option>

                                                            <option>New Jobs</option>

                                                            <option>Allocated</option>

                                                        </select>

                                                    </div>

                                                    <p>

                                                        <a class="show-advance" href="#">Show advance</a>

                                                        <a class="hide-advance" href="#">Hide advance</a>

                                                    </p>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Date Logged(Start)</label>

                                                        <input type="text" placeholder="Start date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Date Logged(End)</label>

                                                        <input type="text" placeholder="End date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Quote Owner</label>

                                                        <select class="browser-default">

                                                            <option>Please select options</option>

                                                            <option>Test type 1</option>

                                                            <option>Test type 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Tag(s)</label>

                                                        <select class="browser-default">

                                                            <option>Please select options</option>

                                                            <option>Test type 1</option>

                                                            <option>Test type 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Expiry Date(Start)</label>

                                                        <input type="text" placeholder="Start date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Expiry Date(End)</label>

                                                        <input type="text" placeholder="End date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Next Contact Date(Start)</label>

                                                        <input type="text" placeholder="Start date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Next Contact Date(End)</label>

                                                        <input type="text" placeholder="End date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Expected Sale Date(Start)</label>

                                                        <input type="text" placeholder="Start date" />

                                                    </div>

                                                    <div class="formfield col s12 m3 advance">

                                                        <label>Expected Sale Date(End)</label>

                                                        <input type="text" placeholder="End date" />

                                                    </div>

                                                    <div class="formfield col s12 m6 advance">

                                                        <label>Chance of Sale</label>

                                                        <select class="browser-default">

                                                            <option>Please select options</option>

                                                            <option>Test option 1</option>

                                                            <option>Test option 2</option>

                                                        </select>

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

                                                <li class="active-list" id="lout"><a href="#">Outstanding <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="laccep"><a href="#">Accepted <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lrejec"><a href="#">Rejected <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lall"><a href="#">All <span class="list-count">(3)</span></a>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="listing-tab-content">

                                            <div id="loutt" class="listing-tab-content-section active-table">

                                                <div class="card-head">

                                                    Outstanding

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

                                                                </tr>

                                                                <tr>

                                                                    <td><span class="head-td">M000003</span></td>

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

                                                                </tr>

                                                                <tr>

                                                                    <td><span class="head-td">M000002</span></td>

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

                                                                </tr>

                                                                

                                                                 

                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="laccept"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Accepted

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lreject"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Rejected

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lallt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    All

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



    <!-- BEGIN: Footer-->



@stop