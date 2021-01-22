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

                           <h5 class="web-head">All Jobs</h5>

                           <div class="action-btns">

                              <a class="waves-effect waves-light btn add-list-btn" href="addjobs.php"><span><i class="fa fa-plus"

                                 aria-hidden="true"></i>Add Job</span></a>

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

                                       <div class="formfield col s12">

                                          <label>

                                          Search Customers

                                          </label>

                                          <input type="text"

                                             placeholder="Customer / Site / Contact / Desctiption / Order no. / Reference" />

                                       </div>

                                       <div class="formfield col s12 m4">

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

                                       <div class="formfield col s12 m4">

                                          <label>

                                          Date logged start

                                          </label>

                                          <input type="text" placeholder="Start date"/>

                                       </div>

                                       <div class="formfield col s12 m4">

                                          <label>

                                          Date (End)

                                          </label>

                                          <input type="text" placeholder="End date"/>

                                       </div>

                                       <div class="formfield col s12 m3">

                                          <label>

                                          Appointment date(Start)

                                          </label>

                                          <input type="text" placeholder="Start date"/>

                                       </div>

                                       <div class="formfield col s12 m3">

                                          <label>

                                          Appointment date(End)                                                           

                                          </label>

                                          <input type="text" placeholder="End date"/>

                                       </div>

                                       <div class="formfield col s12 m3">

                                          <label>

                                          Date complete(Start)

                                          </label>

                                          <input type="text" placeholder="Start date"/>

                                       </div>

                                       <div class="formfield col s12 m3">

                                          <label>

                                          Date complete(End)                                                           

                                          </label>

                                          <input type="text" placeholder="End date"/>

                                       </div>

                                       <p>

                                          <a class="show-advance" href="#">Show advance</a>

                                          <a class="hide-advance" href="#">Hide advance</a>

                                       </p>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Job Category</label>

                                          <select class="browser-default">

                                             <option>Please select catagory</option>

                                             <option>Test category 1</option>

                                             <option>Test category 2</option>

                                          </select>

                                       </div>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Job Types</label>

                                          <select class="browser-default">

                                             <option>Please select options</option>

                                             <option>Test type 1</option>

                                             <option>Test type 2</option>

                                          </select>

                                       </div>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Priority</label>

                                          <select class="browser-default">

                                             <option>Please select options</option>

                                             <option>Test type 1</option>

                                             <option>Test type 2</option>

                                          </select>

                                       </div>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Job Owner</label>

                                          <select class="browser-default">

                                             <option>Please select options</option>

                                             <option>Test owner 1</option>

                                             <option>Test owner 2</option>

                                          </select>

                                       </div>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Area</label>

                                          <select class="browser-default">

                                             <option>Please select options</option>

                                             <option>East</option>

                                             <option>North</option>

                                             <option>South</option>

                                             <option>West</option>

                                          </select>

                                       </div>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Tags(with)</label>

                                          <select class="browser-default">

                                             <option>Select tag</option>

                                             <option>Test</option>

                                          </select>

                                       </div>

                                       <div class="formfield col s12 m6 advance">

                                          <label>Tags(without)</label>

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

                                    <li class="active-list" id="lalt"><a href="#">All <span class="list-count">(3)</span></a>

                                    </li>

                                    <li id="lopen"><a href="#">Open <span class="list-count">(3)</span></a>

                                    </li>

                                    <li id="ljeopardy"><a href="#">In Jeopardy <span class="list-count">(3)</span></a>

                                    </li>

                                    <li id="lallocation"><a href="#">Requires Allocation <span class="list-count">(3)</span></a>

                                    </li>

                                    <li id="lctoday"><a href="#">Completed today <span class="list-count">(3)</span></a>

                                    </li>

                                    <li id="linvoiving"><a href="#">Require Invoicing <span class="list-count">(3)</span></a>

                                    </li>

                                    <li id="lrevisit"><a href="#">Requires Revisit <span class="list-count">(3)</span></a>

                                    </li>

                                 </ul>

                              </div>

                              <div class="listing-tab-content">

                                 <div id="laltt" class="listing-tab-content-section active-table">

                                    <div class="card-head">

                                       All

                                    </div>

                                    <div class="card-content">

                                       <div class="col s12">

                                          <table id="" class="dat_table">

                                             <thead>

                                                <tr>

                                                   <th>Job no.</th>

                                                   <th>Customer Name</th>

                                                   <th>Site Name</th>

                                                   <th>Status</th>

                                                   <th>Visit</th>

                                                   <th>Remaining</th>

                                                   <th>Job Category</th>

                                                   <th>Order Number</th>

                                                   <th>Date Logged</th>

                                                   <th>Date Completed</th>

                                                   <th>Job Type</th>

                                                   <th>Reference Number</th>

                                                   <th>Contact</th>

                                                   <th>Description</th>

                                                   <th>Revisit Reason</th>

                                                   <th>Appointment Date</th>

                                                   <th>Post Code</th>

                                                   <th>Tags</th>

                                                </tr>

                                             </thead>

                                             <tbody>

                                                <tr>

                                                   <td><span class="head-td"><a href="job-report.php">M000000</a></span></td>

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

                                                   <td>test</td>

                                                   <td>test</td>

                                                   <td>test</td>

                                                   <td>test</td>

                                                </tr>

                                                <tr>

                                                   <td><span class="head-td"><a href="job-report.php">M000000</a></span></td>

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

                                                   <td>test</td>

                                                   <td>test</td>

                                                   <td>test</td>

                                                   <td>test</td>

                                                </tr>

                                                <tr>

                                                   <td><span class="head-td"><a href="job-report.php">M000000</a></span></td>

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

                                 <div style="display:none;" id="lopent"

                                    class="listing-tab-content-section open-table">

                                    <div class="card-head">

                                       Open

                                    </div>

                                    <div class="card-content">

                                       <div class="col s12">

                                          <p>No data</p>

                                       </div>

                                    </div>

                                 </div>

                                 <div style="display:none;" id="ljeopardyt"

                                    class="listing-tab-content-section open-table">

                                    <div class="card-head">

                                       In Jeopardy

                                    </div>

                                    <div class="card-content">

                                       <div class="col s12">

                                          <p>No data</p>

                                       </div>

                                    </div>

                                 </div>

                                 <div style="display:none;" id="lallocationt"

                                    class="listing-tab-content-section open-table">

                                    <div class="card-head">

                                       Requires Allocation

                                    </div>

                                    <div class="card-content">

                                       <div class="col s12">

                                          <p>No data</p>

                                       </div>

                                    </div>

                                 </div>

                                 <div style="display:none;" id="lctodayt"

                                    class="listing-tab-content-section open-table">

                                    <div class="card-head">

                                       Completed today

                                    </div>

                                    <div class="card-content">

                                       <div class="col s12">

                                          <p>No data</p>

                                       </div>

                                    </div>

                                 </div>

                                 <div style="display:none;" id="linvoivingt"

                                    class="listing-tab-content-section open-table">

                                    <div class="card-head">

                                       Require Invoicing

                                    </div>

                                    <div class="card-content">

                                       <div class="col s12">

                                          <p>No data</p>

                                       </div>

                                    </div>

                                 </div>

                                 <div style="display:none;" id="lrevisitt"

                                    class="listing-tab-content-section open-table">

                                    <div class="card-head">

                                       Requires Revisit

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