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

                                    <h5 class="web-head">Reports</h5>

                                    <div class="action-btns">

                                        <a class="waves-effect waves-light btn add-list-btn" href="createdynamicdashboard.php"><span><i class="fa fa-plus"

                                                    aria-hidden="true"></i>Create Dynamic Dashboard</span></a>

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

                                                            Select reports by category

                                                        </label>

                                                        <select class="browser-default">

                                                            <option>Select Catagory...</option>

                                                            <option>Test option</option>

                                                        </select>

                                                    </div>

                                                    <div class="formfield col s12 m6">

                                                        <label>

                                                            Search

                                                        </label>

                                                        <input type="text"

                                                            placeholder="Enter search term / ref no. etc.. " />

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

                                                <li class="active-list" id="lallreports"><a href="#">All Reports<span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="lfr"><a href="#">Favourite Reports <span class="list-count">(3)</span></a>

                                                </li>

                                                <li id="ldd"><a href="#">Dynamic Dashboard <span class="list-count">(3)</span></a>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="listing-tab-content">

                                            <div id="lallreportst" class="listing-tab-content-section active-table">

                                                <div class="card-head">

                                                    All Reports

                                                </div>

                                                <div class="card-content">                                                   

                                                    <div class="col s12">

                                                        <table id="" class="dat_table">

                                                            <thead>

                                                                <tr>

                                                                    <th>Category</th>

                                                                    <th>Report Name</th>

                                                                    <th>Preview</th>

                                                                    <th>Add to favourite</th>

                                                                </tr>

                                                            </thead>

                                                            <tbody>

                                                                <tr>

                                                                    <td>JL web</td>

                                                                    <td>All Purchase Invoices with supplier name </td>

                                                                    <td><span><i class="fas fa-eye"></i></span></td>

                                                                    <td><input type="checkbox" class="checkbox" /></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>JL web</td>

                                                                    <td>All Purchase Invoices with supplier name </td>

                                                                    <td><span><i class="fas fa-eye"></i></span></td>

                                                                    <td><input type="checkbox" class="checkbox" /></td>

                                                                </tr>

                                                                <tr>

                                                                    <td>JL web</td>

                                                                    <td>All Purchase Invoices with supplier name </td>

                                                                    <td><span><i class="fas fa-eye"></i></span></td>

                                                                    <td><input type="checkbox" class="checkbox" /></td>

                                                                </tr>

                                                                

                                                                 

                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lfrt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Favourite Reports

                                                </div>

                                                <div class="card-content">

                                                    <div class="col s12">

                                                        <p>No data</p>

                                                    </div>

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lddt"

                                                class="listing-tab-content-section open-table">

                                                <div class="card-head">

                                                    Dynamic Dashboard

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