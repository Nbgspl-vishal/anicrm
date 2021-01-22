
@extends('superadmin.layout.superadmin')

@section('title')
Payment Setting 
@stop

@section('content')
<!-- END: Head-->
@section('css')
<style>
   [type='radio']:not(:checked), [type='radio']:checked{
    opacity: 1!important;
    position: relative!important;
    width: 16px;
    height: 16px;
    vertical-align: middle;
    pointer-events: auto;
    cursor: pointer;
    margin-right: 4px;
   }
</style>
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
                           <h5 class="web-head">Payment Gateway Settings</h5>
                        </div>
                        <div class="listing-filters">
                           <div class="card">
                              <div class="card-content">
                                 <form>
                                    <div class="listing-table">
                                       <div class="card">
                                          <div class="listing-table-tab">
                                             <ul>
                                                <li class="active-list" id="gen">
                                                    <a href="#">General</a>
                                                </li>
                                                <li id="auth" class="">
                                                    <a href="#">Authorize.net Accept.js</a>
                                                </li>
                                                <!-- <li id="instam" class="">
                                                    <a href="#">Instamojo</a>
                                                </li>
                                                <li id="mollie" class="">
                                                    <a href="#">Mollie</a>
                                                </li>
                                                <li id="braintree" class="">
                                                    <a href="#">Braintree</a>
                                                </li> -->
                                                <li id="paypalSmart" class="">
                                                    <a href="#">Paypal Smart Checkout</a>
                                                </li>
                                                <li id="paypal" class="">
                                                    <a href="#">Paypal</a>
                                                </li>
                                                <li id="payumoney" class="">
                                                    <a href="#">PayU Money</a>
                                                </li>
                                                <li id="stripecheckout" class="">
                                                    <a href="#">Stripe Checkout</a>
                                                </li>
                                                <li id="stripe-ideal" class="">
                                                    <a href="#">Stripe iDEAL</a>
                                                </li>
                                             </ul>
                                          </div>
                                          <div class="listing-tab-content" id="tbC">
                                            <div id="gent" class="listing-tab-content-section active-table" style="">
                                                <div class="card-head">
                                                   General
                                                </div>
                                                <div class="card-content">
                                                    <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Receive notification when customer pay invoice (built-in)</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes" type="radio" name="show" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes">Yes</label>
                                                          <input class="radio-input" id="no" type="radio" name="show" value="no"/>
                                                          <label class="radio-label" for="no">No</label>
                                                        </div>
                                                      </div>
                                                      <hr>
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Allow customer to modify the amount to pay (for online payments)</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes1" type="radio" name="online" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes1">Yes</label>
                                                          <input class="radio-input" id="no1" type="radio" name="online" value="no"/>
                                                          <label class="radio-label" for="no1">No</label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="display: none;" id="autht" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   Authorize.net Accept.js
                                                </div>
                                                <div class="card-content">
                                                   <p style="color:#fdac41;">SSL is required if you're using the Authorize.Net AIM payment API. Authorize.net only supports 1 currency per account. Make sure you add only 1 currency associated with your Authorize account in the currencies field.</p>
                                                   <p>If you are enabling test mode, make sure to set test credentials from <a href="https://sandbox.authorize.net" target="_blank">https://sandbox.authorize.net</a></p>
                                                   <p><b>Currently supported currencies</b>: USD, CAD, CHF, DKK, EUR, GBP, NOK, PLN, SEK, AUD, NZD</p>
                                                   <hr>
                                                   <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Active</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes2" type="radio" name="show1" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes2">Yes</label>
                                                          <input class="radio-input" id="no2" type="radio" name="show1" value="no"/>
                                                          <label class="radio-label" for="no2">No</label>
                                                        </div>
                                                      </div>
                                                  </div><hr>
                                                  <div class="input-field">
                                                      <label>Label</label>
                                                      <input type="text" name="" value="Authorize.net Accept.js">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Public Key</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>API Login ID</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>API Transaction ID</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Currency</label>
                                                      <input type="text" name="" value="USD">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Gateway Dashbord Payment Description</label>
                                                      <textarea>Payment for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <hr>
                                                  <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Enable Test Mode</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes3" type="radio" name="show3" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes3">Yes</label>
                                                          <input class="radio-input" id="no3" type="radio" name="show3" value="no"/>
                                                          <label class="radio-label" for="no3">No</label>
                                                        </div>
                                                      </div><br>
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Selected by default on invoice</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes4" type="radio" name="online4" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes4">Yes</label>
                                                          <input class="radio-input" id="no4" type="radio" name="online4" value="no"/>
                                                          <label class="radio-label" for="no4">No</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <!-- <div style="display: none;" id="instamt" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   All
                                                </div>
                                                <div class="card-content">
                                                   
                                                </div>
                                            </div>
                                            <div style="display: none;" id="molliet" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   All
                                                </div>
                                                <div class="card-content">
                                                   
                                                </div>
                                            </div>
                                            <div style="display: none;" id="braintreet" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   All
                                                </div>
                                                <div class="card-content">
                                                   
                                                </div>
                                            </div> -->
                                            <div style="display: none;" id="paypalSmartt" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   Paypal Smart Checkout
                                                </div>
                                                <div class="card-content">
                                                   <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Active</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes5" type="radio" name="paypal" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes5">Yes</label>
                                                          <input class="radio-input" id="no5" type="radio" name="paypal" value="no"/>
                                                          <label class="radio-label" for="no5">No</label>
                                                        </div>
                                                      </div>
                                                  </div><hr>
                                                  <div class="input-field">
                                                      <label>Label</label>
                                                      <input type="text" name="" value="Paypal Smart Checkout">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Client ID</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Secret</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Currencies (coma separated)</label>
                                                      <input type="text" name="currencies" value="USD, INR">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Gateway Dashbord Payment Description</label>
                                                      <textarea>Payment for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <hr>
                                                  <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Enable Test Mode</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes6" type="radio" name="paypal2" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes6">Yes</label>
                                                          <input class="radio-input" id="no6" type="radio" name="paypal2" value="no"/>
                                                          <label class="radio-label" for="no6">No</label>
                                                        </div>
                                                      </div><br>
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Selected by default on invoice</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes7" type="radio" name="paypal3" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes7">Yes</label>
                                                          <input class="radio-input" id="no7" type="radio" name="paypal3" value="no"/>
                                                          <label class="radio-label" for="no7">No</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div style="display: none;" id="paypalt" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   Paypal
                                                </div>
                                                <div class="card-content">
                                                   <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Active</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes8" type="radio" name="paypal3" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes8">Yes</label>
                                                          <input class="radio-input" id="no8" type="radio" name="paypal3" value="no"/>
                                                          <label class="radio-label" for="no8">No</label>
                                                        </div>
                                                      </div>
                                                  </div><hr>
                                                  <div class="input-field">
                                                      <label>Label</label>
                                                      <input type="text" name="" value="Paypal">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>PayPal API Username</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>PayPal API Password</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Currencies (coma separated)</label>
                                                      <input type="text" name="currencies" value="USD, INR">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Gateway Dashbord Payment Description</label>
                                                      <textarea>Paypal for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <hr>
                                                  <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Enable Test Mode</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes9" type="radio" name="paypal4" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes9">Yes</label>
                                                          <input class="radio-input" id="no9" type="radio" name="paypal4" value="no"/>
                                                          <label class="radio-label" for="no9">No</label>
                                                        </div>
                                                      </div><br>
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Selected by default on invoice</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes10" type="radio" name="paypal5" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes10">Yes</label>
                                                          <input class="radio-input" id="no10" type="radio" name="paypal6" value="no"/>
                                                          <label class="radio-label" for="no10">No</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div style="display: none;" id="payumoneyt" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   Payumoney
                                                </div>
                                                <div class="card-content">
                                                   <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Active</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes11" type="radio" name="payumoney" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes11">Yes</label>
                                                          <input class="radio-input" id="no11" type="radio" name="payumoney" value="no"/>
                                                          <label class="radio-label" for="no11">No</label>
                                                        </div>
                                                      </div>
                                                  </div><hr>
                                                  <div class="input-field">
                                                      <label>Label</label>
                                                      <input type="text" name="" value="Payumoney">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>PayU Money Key</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>PayU Money Salt</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Currencies</label>
                                                      <input type="text" name="currencies" value="USD">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Gateway Dashbord Payment Description</label>
                                                      <textarea>Payment for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <hr>
                                                  <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Enable Test Mode</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes12" type="radio" name="payumoney1" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes12">Yes</label>
                                                          <input class="radio-input" id="no12" type="radio" name="payumoney1" value="no"/>
                                                          <label class="radio-label" for="no12">No</label>
                                                        </div>
                                                      </div><br>
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Selected by default on invoice</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes13" type="radio" name="payumoney2" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes13">Yes</label>
                                                          <input class="radio-input" id="no13" type="radio" name="payumoney2" value="no"/>
                                                          <label class="radio-label" for="no13">No</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div style="display: none;" id="stripecheckoutt" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   Stripe Checkout
                                                </div>
                                                <div class="card-content">
                                                   <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Active</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes14" type="radio" name="stripecheckout" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes14">Yes</label>
                                                          <input class="radio-input" id="no14" type="radio" name="stripecheckout" value="no"/>
                                                          <label class="radio-label" for="no14">No</label>
                                                        </div>
                                                      </div>
                                                  </div><hr>
                                                  <div class="input-field">
                                                      <label>Label</label>
                                                      <input type="text" name="" value="Stripe Checkout">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Stripe API Secret Key</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Stripe Publishable Key</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Currencies</label>
                                                      <input type="text" name="currencies" value="USD, EUR">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Gateway Dashbord Payment Description</label>
                                                      <textarea>Payment for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <hr>
                                                  <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Allow primary contact to update stored credit card token?</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes15" type="radio" name="stripecheckout1" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes15">Yes</label>
                                                          <input class="radio-input" id="no15" type="radio" name="stripecheckout1" value="no"/>
                                                          <label class="radio-label" for="no15">No</label>
                                                        </div>
                                                      </div><br>
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Selected by default on invoice</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes16" type="radio" name="stripecheckout2" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes16">Yes</label>
                                                          <input class="radio-input" id="no16" type="radio" name="stripecheckout2" value="no"/>
                                                          <label class="radio-label" for="no16">No</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                            <div style="display: none;" id="stripe-idealt" class="listing-tab-content-section">
                                                <div class="card-head">
                                                   Stripe iDEAL
                                                </div>
                                                <div class="card-content">
                                                   <div class="radio-flex">
                                                      <div class="radio-container">
                                                        <p class="radio-label--parent">Active</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes17" type="radio" name="stripe-ideal" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes17">Yes</label>
                                                          <input class="radio-input" id="no17" type="radio" name="stripe-ideal" value="no"/>
                                                          <label class="radio-label" for="no17">No</label>
                                                        </div>
                                                      </div>
                                                  </div><hr>
                                                  <div class="input-field">
                                                      <label>Label</label>
                                                      <input type="text" name="" value="Stripe iDEAL">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Stripe API Secret Key</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Stripe Publishable Key</label>
                                                      <input type="text" name="" value="">
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Gateway Dashbord Payment Description</label>
                                                      <textarea>Payment for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <div class="input-field">
                                                      <label>Statement Descriptor (shown in customer bank statement)</label>
                                                      <textarea>Payment for Invoice {invoice_number}</textarea>
                                                  </div>
                                                  <div class="input-field">
                                                    <p>Statement descriptors are limited to 22 characters, cannot use the special characters <, >, ', ", or *, and must not consist solely of numbers.</p>
                                                      <label>Currencies</label>
                                                      <input type="text" name="currencies" value="USD, EUR">
                                                  </div>
                                                  <hr>
                                                  <div class="radio-flex">
                                                    <div class="radio-container">
                                                        <p class="radio-label--parent">Selected by default on invoice</p>
                                                        <div class="radio-options">
                                                          <input class="radio-input" id="yes19" type="radio" name="stripe-ideal2" value="yes" checked="checked"/>
                                                          <label class="radio-label" for="yes19">Yes</label>
                                                          <input class="radio-input" id="no19" type="radio" name="stripe-ideal2" value="no"/>
                                                          <label class="radio-label" for="no19">No</label>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-submit">
                                       <button class="btn">Save Changes</button>
                                    </div>
                                 </form>
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
   <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css">
   <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script> -->
   <!-- <script>

        $(document).ready(function() {

            $('input[name="currencies"]').tagsinput({
                trimValue: true,
                confirmKeys: [13, 44, 32],
                focusClass: 'my-focus-class'
            });
            
            $('.bootstrap-tagsinput input').on('focus', function() {
                $(this).closest('.bootstrap-tagsinput').addClass('has-focus');
            }).on('blur', function() {
                $(this).closest('.bootstrap-tagsinput').removeClass('has-focus');
            });
            
        });

   </script> -->