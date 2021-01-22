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

                                    <h5 class="web-head">Purchase Orders</h5>

                                    <div class="action-btns">

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

                                                    <div class="formfield col s12">

                                                        <label>

                                                            Search Purchases Order

                                                        </label>

                                                        <input type="text"

                                                            placeholder="PO Number / Job Number / Supplier Name / Account No. / Reference No." />

                                                    </div>

                                                    <div class="formfield col s12 m6">

                                                        <label>

                                                            Date Raised

                                                        </label>

                                                        <input type="text"

                                                            placeholder="" />

                                                    </div>

                                                    <div class="formfield col s12 m6">

                                                        <label>

                                                            End Date

                                                        </label>

                                                        <input type="text"

                                                            placeholder="" />

                                                    </div>

                                                   

                                                    <p>

                                                        <a class="show-advance" href="#">Show advance</a>

                                                        <a class="hide-advance" href="#">Hide advance</a>

                                                    </p>

                                                    <div class="formfield col s12 m4 advance">

                                                        <label>PO Status</label>

                                                        <select class="browser-default">

                                                            <option>Test data 1</option>

                                                            <option>Test data 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m4 advance">

                                                        <label>Delivery Status</label>

                                                        <select class="browser-default">

                                                            <option>Test data 1</option>

                                                            <option>Test data 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m4 advance">

                                                        <label>Invoice Status</label>

                                                        <select class="browser-default">

                                                            <option>Test data 1</option>

                                                            <option>Test data 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m4 advance">

                                                        <label>Tag(s)</label>

                                                        <select class="browser-default">

                                                            <option>Test data 1</option>

                                                            <option>Test data 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m4 advance">

                                                        <label>Owner</label>

                                                        <select class="browser-default">

                                                            <option>Test data 1</option>

                                                            <option>Test data 2</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m4 advance">

                                                        <label>Raised by</label>

                                                        <select class="browser-default">

                                                            <option>Test data 1</option>

                                                            <option>Test data 2</option>

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

                                                <li class="active-list" id="lallpurchase"><a href="#">All<span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lfd"><a href="#">Fully Delivered <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lpd"><a href="#">Partially Delivered <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lnd"><a href="#">Not Delivered <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="liq"><a href="#">In Query <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lna"><a href="#">Not Applicable <span class="list-count">(3)</span></a>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="listing-tab-content">

                                            <div id="lallpurchaset" class="listing-tab-content-section active-table">

                                                <div class="card-head">

                                                    All

                                                </div>

                                                <div class="card-content">                                                   

                                                    <div class="col s12">

                                                        <table id="" class="dat_table">

                                                            <thead>

                                                                <tr>

                                                                    <th>Test Column 1</th>

                                                                    <th>Test Column 2</th>

                                                                    <th>Test Column 3</th>

                                                                    <th>Test Column 4</th>

                                                                    <th>Test Column 5</th>

                                                                    <th>Test Column 6</th>

                                                                    <th>Test Column 7</th>

                                                                </tr>

                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                <tr>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                <tr>

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

                                            <div style="display:none;" id="lfdt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Fully Delivered

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lpdt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Partially Delivered

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lndt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Not Delivered

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="liqt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    In Query

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lnat"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Not Applicable

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
@stop