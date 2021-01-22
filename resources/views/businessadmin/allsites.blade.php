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

                                    <h5 class="web-head">All Sites</h5>

                                    <div class="action-btns">

                                        <a class="waves-effect waves-light btn add-list-btn" href="addsites.php"><span><i class="fa fa-plus"

                                                    aria-hidden="true"></i>Add Sites</span></a>

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

                                            <div class="col s12 m6">

                                                <form class="web-form">

                                                    <div class="formfield">

                                                        <label>

                                                            Search Customers

                                                        </label>

                                                        <input type="text"

                                                            placeholder="Name / Address / Contact details / Reference / Customer name / Customer reference" />

                                                    </div>

                                                    <p>

                                                        <a class="show-advance" href="#">Show advance</a>

                                                        <a class="hide-advance" href="#">Hide advance</a>

                                                    </p>

                                                    <div class="formfield advance">

                                                        <label>Tag(s)</label>

                                                        <select class="browser-default">

                                                            <option>Select tag</option>

                                                            <option>Test</option>

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

                                                    <div class="col s12">

                                                        <table id="" class="dat_table">

                                                            <thead>

                                                                <tr>

                                                                    <th>Customer</th>

                                                                    <th>Site Name</th>

                                                                    <th>Address</th>

                                                                    <th>Postcode</th>

                                                                    <th>Contact name</th>

                                                                    <th>Telephone</th>

                                                                    <th>Email</th>

                                                                </tr>

                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>Ravi Kant</td>

                                                                    <td><a href="site-report.php"><span class="head-td">Sample name</span></a></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                 <tr>

                                                                    <td>Ravi Kant</td>

                                                                    <td><a href="site-report.php"><span class="head-td">Sample name</span></a></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                 <tr>

                                                                    <td>Ravi Kant</td>

                                                                    <td><a href="site-report.php"><span class="head-td">Sample name</span></a></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                 <tr>

                                                                    <td>Ravi Kant</td>

                                                                    <td><a href="site-report.php"><span class="head-td">Sample name</span></a></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                 <tr>

                                                                    <td>Ravi Kant</td>

                                                                    <td><a href="site-report.php"><span class="head-td">Sample name</span></a></td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                    <td>test</td>

                                                                </tr>

                                                                 <tr>

                                                                    <td>Ravi Kant</td>

                                                                    <td><a href="site-report.php"><span class="head-td">Sample name</span></a></td>

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

                                            <div style="display:none;" id="lstt"

                                                class="listing-tab-content-section suspended-table">

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>



                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="laltt"

                                                class="listing-tab-content-section all-table">

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