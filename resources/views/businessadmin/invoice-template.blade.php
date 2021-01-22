@extends('businessadmin.layouts.ani')

<!-- END: Head-->
<body
   class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   "
   data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
   <!-- BEGIN: Header-->
   <?php  include 'header.php' ?>
   <!-- END: Header-->
   <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title">
         <a class="collection-item" href="#">
            <h6 class="search-title">FILES</h6>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/pdf-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                     submitted</span><small class="grey-text">Marketing Manager</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">17kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/doc-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                     Generator</span><small class="grey-text">FontEnd Developer</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">550kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/xls-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File
                     Uploaded</span><small class="grey-text">Digital Marketing Manager</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">20kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img src="../app-assets/images/icon/jpg-image.png" width="24" height="30"
                     alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Anna
                     Strong</span><small class="grey-text">Web Designer</small>
                  </div>
               </div>
               <div class="status"><small class="grey-text">37kb</small></div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion-title">
         <a class="collection-item" href="#">
            <h6 class="search-title">MEMBERS</h6>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-7.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                     class="grey-text">UI designer</small></div>
               </div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-8.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Michal
                     Clark</span><small class="grey-text">FontEnd Developer</small>
                  </div>
               </div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-10.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Milena
                     Gibson</span><small class="grey-text">Digital Marketing</small>
                  </div>
               </div>
            </div>
         </a>
      </li>
      <li class="auto-suggestion">
         <a class="collection-item" href="#">
            <div class="display-flex">
               <div class="display-flex align-item-center flex-grow-1">
                  <div class="avatar"><img class="circle" src="../app-assets/images/avatar/avatar-12.png"
                     width="30" alt="sample image"></div>
                  <div class="member-info display-flex flex-column"><span class="black-text">Anna
                     Strong</span><small class="grey-text">Web Designer</small>
                  </div>
               </div>
            </div>
         </a>
      </li>
   </ul>
   <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title">
         <a class="collection-item" href="#">
            <h6 class="search-title">PAGES</h6>
         </a>
      </li>
   </ul>
   <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
         class="material-icons">error_outline</span><span class="member-info">No results found.</span></a>
      </li>
   </ul>
   <!-- BEGIN: SideNav-->
   <?php include 'sidebar.php'; ?>
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
                           <h5 class="web-head">Invoice</h5>
                           
                        </div>

                        <div class="card form-card">
                           <div class="card-content">
                              <div class="row">
                                 <div class="col s4 m4">
                                    <h4 class="maintitlebill" >Title</h4>
                                    <p>Contact Name</p>
                                    <p>Contact Postal Address</p>
                                    <p>Contact text display name</p>
                                    <p>Contact tax number</p>
                                 </div>

                                 <div class="col s4 m4">
                                    <h5 class="subtitlebill">Date</h5>
                                    <p>Invoice Date</p>

                                    <h5 class="subtitlebill">Expiry</h5>
                                    <p>Expiry Date</p>

                                    <h5 class="subtitlebill">Account Number</h5>
                                    <p>ContactAccountNumber</p>

                                    <h5 class="subtitlebill">Quote Number</h5>
                                    <p>InvoiceNumber</p>

                                    <h5 class="subtitlebill">Reference</h5>
                                    <p>Reference</p>

                                    <h5 class="subtitlebill">Organisation Tax Display Name</h5>
                                    <p>OrganisationTaxDisplayNumber</p>
                                 </div>

                                 <div class="col s4 m4">
                                    <div class="billtext-right">
                                       <p>Hot Recruitment</p>
                                       <p>Consultants</p>
                                       <p>Ltd t/a eRecruitSmart</p>
                                       <p>First Floor, Building 2</p>
                                       <p>Croxley Business Park</p>
                                       <p>Herts WD18 8YA</p>

                                       <br>
                                       <p>01923 431 789</p>
                                       <p>hello@erecruitsmart.co.uk</p>
                                    </div>
                                 </div>
                              </div>

                              <br>

                              <div class="row">
                                 <div class="col s12">
                                    <h4 class="maintitlebill" >Quote Title</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et.</p>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col s12">
                                    <table id="">
                                       <thead>
                                          <tr>
                                             <th>Item Code</th>
                                             <th>Description</th>
                                             <th>Quantity</th>
                                             <th>Unit Price</th>
                                             <th>TaxUnitName</th>
                                             <th>Amount</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>#12345</td>
                                             <td>Lorem ipsum dolor sit amet, consectetur.</td>
                                             <td>3</td>
                                             <td>500</td>
                                             <td>TaxPercentageOrName</td>
                                             <td>1500</td>
                                          </tr>

                                          <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>Subtotal</td>
                                             <td>InvoiceSubTotal</td>
                                          </tr>

                                          <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>TaxSubTotal</td>
                                             <td>Total</td>
                                             <td>TaxTotal</td>
                                          </tr>

                                          <tr>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td></td>
                                             <td>TOTAL</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>

                              

                              <div class="row">
                                 <div class="col s12">
                                    <h4 class="maintitlebill">How to pay by BACS</h4>
                                    <p>Account Name: Hot Recruitment Consultants Ltd</p>
                                    <p>Bank: Lloyds Bank</p>
                                    <p>Sort Code: 30-99-64</p>
                                    <p>Account Number: 01669223</p>

                                    <h4 class="maintitlebill">**PLEASE NOTE: WE DO NOT ACCEPT CHEQUES**</h4>

                                    <h5 class="subtitlebill">How to pay online</h5>
                                    <p>PayPalImage</p>
                                    <p>PayPalMessageAndUrl</p>
                                    <p><small>Please note:  Unless otherwise agreed by us our payment terms are immediate.  If payment is not received within 14 days of this invoice, we reserve the right to charge our full service fee of £2000 plus VAT per position booked, which would become immediately due in any event.</small></p>
                                    <p><small>Company Number: 4928969   VAT Registration Number: 830 7866 12     Registered Office: 90 Mill Lane London NW6 1NL</small></p>
                                 </div>
                              </div>

                              <div class="row">
                                 <div class="col s12">
                                    <div class="form-submit">
                                       <button class="btn">Save</button>
                                       <button class="btn">Cancel</button>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>

                        <div class="card form-card">
                           <div class="card-content">
                              <div class="row">
                                 <div class="col s12">
                                    <center><h4>TERMS AND CONDITIONS</h4></center>

                                    <h5>Terms and Conditions for Managed Advertising and Recruitment Services</h5>
                                    <h6>1. Definitions</h6>
                                    <p><b>eRecruitSmart </b>means this or any other related website, product or service belonging to <b>Hot Recruitment Consultants Ltd</b> or any subsidiary companies</p>
                                    <p><b>Recruiter </b>means the employer, any person, company, organisation or firm who purchases services from Hot Recruitment Consultants Ltd or any subsidiary or associated companies </p>
                                    <p><b>Jobseeker </b>means the person using the site, product or services for career related purposes</p>
                                    <p><b>Services </b>means all products and services made available by Hot Recruitment Consultants Ltd</p>
                                    <p><b>Order </b>means an order for the supply of services provided by us and signed by the Recruiter by email </p>
                                    <p><b>Agreement </b>means an obligation to pay in advance for services stated on the order for the term specified</p>

                                    <h6>2. General</h6>
                                    <p>•  You agree that by using our services you agree to be bound by these terms.</p>
                                    <p>•  Recruiters undertake to deal with jobseekers in a professional way and will indemnify us from and against any claim brought by an individual or company arising from your breach of this obligation and these terms and conditions </p>

                                    <h6>3.  Privacy Policy</h6>
                                    <p>•  We adhere to strict codes of confidentiality and the correct treatment of your data</p>
                                    <p>•  We may use the information submitted to create a database and may use visitor information to keep such visitor informed by email, telephone and post on opportunities, industry updates and products/services that we consider will be of interest.</p>
                                    <p>•  By responding to communications sent by eRecruitSmart or to the website and any offers advertised, you are deemed to consent to eRecruitSmart processing business data about your company for the above purposes. </p>
                                    <p>•  If you do not want to receive information then telephone or email us at linda@erecruitsmart.co.uk.</p>
                                    <p>•  All information sent by us to the Recruiter is strictly confidential and must not be passed to any third party person or company. </p>
                                    <p>•  If information regarding charges is relayed to another party who is not part of the Recruiter company i.e. to a job board, publisher or competitor, either verbally or in writing, the Recruiter will compensate us for any loss or damage that may be incurred as a result of their actions.</p>

                                    <h6>4. Disclaimer</h6>
                                    <p>•  We make no warranties or representations on our site(s) or services regarding contents, accuracy, completeness or suitability and are excluded from liability for same. </p>
                                    <p>•  We, our representatives, owners and employees are not liable for any loss or damages of any kind arising in connection with using its site or services whether directly or indirectly and are not liable for any loss of data, income, profit, loss of or damage to property and claims of third parties. </p>
                                    <p>•  All services are provided in good faith and we cannot guarantee the validity of any representations made by the Jobseeker on their CV or on their availability or qualification to perform duties to the Recruiter, nor shall we be responsible to the Jobseeker for the accuracy or availability of any information provided by the Recruiter.  </p>
                                    <p>•  We will use our best endeavours to meet the Recruiters requirements but we don’t guarantee you will get a response to your adverts or that the responses you do get will be suitable for the job you have advertised.</p>
                                    <p>•  We cannot guarantee that any job seeker will keep confidential any information or data provided by the Recruiter. </p>

                                    <h6>5. Services</h6>
                                    <p>•  Each order is per job title, per site location and if one job title with multiple positions are available at the same location, one fee will be applicable.   </p>
                                    <p>•  We will commence providing services when we have received payment and/or a written confirmation of the invoice and that its payment is e-signed and approved by you.</p>
                                    <p>•  We do not guarantee Jobseekers will get a response to their application.</p>
                                    <p>•  We do not guarantee that Recruiters will receive a response to their job.</p>

                                    <h6>6. Variations</h6>
                                    <p>We reserve the right at any time and without notice to revise its site content and these terms and conditions and we also reserve the right to vary, change, substitute or add any job boards that we see fit so to do.</p>

                                    <h6>7. Using information</h6>
                                    <p>Recruiters acknowledge and agree to be bound to the terms of our Privacy Policy.  For more information on visit www.erecruitsmart.co.uk</p>

                                    <h6>8. Prices</h6>
                                    <p>•  Recruiter packages are purchased in advance will be marketed for 28 days. </p>
                                    <p>•  All prices are exclusive of Value Added Tax at the prevailing rate </p>

                                    <h6>9. Payment Terms</h6>
                                    <p>Payment must be received prior to services being supplied unless otherwise agreed by us.  If we have agreed to provide the services upon your written e-confirmation of a booking, we would require you to make payment within 14 days.  Unless otherwise agreed, if payment is not received within 14 days of this booking, we reserve the right to charge our full-service fee of £2,000 plus VAT per position booked which would become immediately due in any event. </p>
                                    <p>Failure to pay invoices within our payment terms, or the agreed payment terms, will result in any applied discounts being removed and a full fee invoice will be sent to you.</p>

                                    <h6>10. Termination & Refunds</h6>
                                    <p>•  The Recruiter can terminate the provision of services with no less than 28 days’ notice.</p>
                                    <p>•  No refunds will be applicable if the Recruiter simply changes its/his/her mind about proceeding with the booking after booking confirmation has been made by the Recruiter.</p>
                                    <p>•  No refund will be applicable where we have specifically advised on wording for the Recruiter on a job description content and/or salary range, which the Recruiter chooses not to use.</p>

                                    <h6>11. Fair Usage Policy</h6>
                                    <p>•  We operate a fair usage policy and if we deem that a Recruiter is using the Online Recruitment Product in an inappropriate or unfair way, we will limit the services to a specified number of applications or withdraw the facility and there will be no rebate eligible.</p>
                                    <p>•  For the Premium product we will provide up to a maximum of 350 applications and any additional applications provided in excess of that amount will at our complete discretion.</p>
                                    <p>•  For the eRSScreening product we will provide up to a maximum of 300 screened applications and any additional applications provided in excess of that amount will be at our complete discretion.</p>
                                    <p>•  All other products are as per website and Media Pack</p>

                                    <h6>12. Employment Agencies and Employment Business Regulations</h6>
                                    <p>•  We operate the Online Recruitment Product as a venue only  </p>
                                    <p>•  It is the responsibility of the Recruiter to check that the jobseeker has the appropriate skills, experience, ID and right to work. </p>

                                    <h6>13. Technical stuff</h6>
                                    <p>We cannot be held liable for any technical faults that are outside of our control.</p>

                                    <h6>14. Database & Site contents</h6>
                                    <p>•  Copyright and intellectual property rights and candidate database rights belong to us and the Recruiter agrees that the Recruiter does not have any rights in the database or its contents or the site contents </p>
                                    <p>•  Subject to all other terms being complied with, the Recruiter will have access to the database as long as the Recruiter is a client of ours.  If the Recruiter ceases to become a client or gives cause to us that the database may be purged, then we reserve the right to terminate access with immediate effect.</p>
                                    <p>•  Once our services are purchased by the Recruiter, the Recruiter can use the information to find suitable candidates to fill their posts within the remit of these Terms.</p>
                                    <p>•  The Recruiter cannot supply, copy, sell or licence material provided to any other person including another other group of companies. </p>
                                    <p>•  The Recruiter cannot use our services for any other purpose than to fill the Recruiters own job vacancies.  Applications must not be passed to any other company and can only be used by the Recruiter placing the booking, otherwise we reserve the right to charge a full-service fee of £100 to the Recruiter per CV received into the Candidate Database provided and sent to the Recruiter and/or £3,000 per person employed, whichever is the greater.</p>
                                    <p>•  The Recruiter will comply with the Data Protection Act, GDPR and relevant legislation and regulations </p>
                                    <p>•  The Recruiter agrees to professionally and sensitively handle the information provided and will not do anything to bring us into disrepute or breach these terms and the Recruiter will keep us indemnified against any claim arising from said breach </p>

                                    <h6>15. Liability</h6>
                                    <p>By placing adverts through our services, the Recruiter accepts these terms and conditions and will indemnify us against all or any claim resulting in a breach of these terms, law or legislation. Additionally, we shall not be liable for failure to display job postings due to circumstances outside our control.</p>
                                    <p>These terms shall be governed by and construed in accordance with the laws of England and Wales and be subject to the exclusive jurisdiction of the Court of England and Wales. The application of law of each European Community member state is excluded from having operation regarding these terms. </p>
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
   <?php include 'footer.php'; ?>