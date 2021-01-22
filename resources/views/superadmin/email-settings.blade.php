
@extends('superadmin.layout.superadmin')

@section('title')
Email settings
@stop
@section('ccs')
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
<!-- END: Head-->


  
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
                                <h5 class="web-head">Email Settings</h5>
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
                                                                <a href="#">SMTP Settings</a>
                                                            </li>
                                                            <li id="auth" class="">
                                                                <a href="#">Email Queue</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="listing-tab-content" id="tbC">
                                                        <div id="gent" class="listing-tab-content-section active-table" style="">
                                                            <div class="card-head">
                                                                SMTP Settings <span style="font-size:14px;font-weight:normal;color:#000;">(Setup main email)</span>
                                                            </div>
                                                            <div class="card-content">
                                                                <div class="radio-flex">
                                                                    <div class="radio-container">
                                                                        <p class="radio-label--parent">Mail Engine</p>
                                                                        <div class="radio-options">
                                                                            <input class="radio-input" id="phpmailer" type="radio" name="emailengine" value="PHP Mailer" checked="checked"/>
                                                                            <label class="radio-label" for="phpmailer">PHP Mailer</label>
                                                                            <input class="radio-input" id="codeIgniter" type="radio" name="emailengine" value="CodeIgniter"/>
                                                                            <label class="radio-label" for="codeIgniter">CodeIgniter</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="alert alert-warning">
                                                                    The "mail" protocol is not the recommended protocol to send emails, you should strongly consider configuring the "SMTP" protocol to avoid any distruptions and delivery issues.
                                                                </div>
                                                                <div class="radio-flex">
                                                                    <div class="radio-container">
                                                                        <p class="radio-label--parent">Email Protocol</p>
                                                                        <div class="radio-options">
                                                                            <input class="radio-input" id="smtp" type="radio" name="email-protocol" value="SMTP" />
                                                                            <label class="radio-label" for="smtp">SMTP</label>
                                                                            <input class="radio-input" id="sendmail" type="radio" name="email-protocol" value="Sendmail"/>
                                                                            <label class="radio-label" for="sendmail">Sendmail</label>
                                                                            <input class="radio-input" id="mail" type="radio" name="email-protocol" value="Mail" checked="checked"/>
                                                                            <label class="radio-label" for="no">Mail</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="input-field">
                                                                    <label for="">Email</label>
                                                                    <input type="email" name="" value="exampleemail@gmail.com">
                                                                </div>
                                                                <div class="input-field">
                                                                    <label for="">Email Charset</label>
                                                                    <input type="text" name="" value="utf-8">
                                                                </div>
                                                                <div class="input-field">
                                                                    <label for="">BCC All Emails To</label>
                                                                    <input type="email" name="" value="">
                                                                </div>
                                                                <div class="input-field">
                                                                    <label for="">Email Signature</label>
                                                                    <textarea class="email-signature"></textarea>
                                                                </div>
                                                                <hr>
                                                                <div class="input-field">
                                                                    <label for="">Predefined Header</label>
                                                                    <textarea id="custom-textarea">
                                                                      <!doctype html>
                                                                        <html>
                                                                          <head>
                                                                            <meta name="viewport" content="width=device-width" />
                                                                            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
                                                                            <style>
                                                                              body {
                                                                               background-color: #f6f6f6;
                                                                               font-family: sans-serif;
                                                                               -webkit-font-smoothing: antialiased;
                                                                               font-size: 14px;
                                                                               line-height: 1.4;
                                                                               margin: 0;
                                                                               padding: 0;
                                                                               -ms-text-size-adjust: 100%;
                                                                               -webkit-text-size-adjust: 100%;
                                                                             }
                                                                             table {
                                                                               border-collapse: separate;
                                                                               mso-table-lspace: 0pt;
                                                                               mso-table-rspace: 0pt;
                                                                               width: 100%;
                                                                             }
                                                                             table td {
                                                                               font-family: sans-serif;
                                                                               font-size: 14px;
                                                                               vertical-align: top;
                                                                             }
                                                                             .container {
                                                                                display: block;
                                                                                margin: 0 auto !important;
                                                                                max-width: 680px;
                                                                                padding: 10px;
                                                                                width: 680px;
                                                                              }
                                                                              .content {
                                                                                box-sizing: border-box;
                                                                                display: block;
                                                                                margin: 0 auto;
                                                                                max-width: 680px;
                                                                                padding: 10px;
                                                                              }
                                                                              .main {
                                                                                background: #fff;
                                                                                border-radius: 3px;
                                                                                width: 100%;
                                                                              }
                                                                              .wrapper {
                                                                                box-sizing: border-box;
                                                                                padding: 20px;
                                                                              }
                                                                              .footer {
                                                                                clear: both;
                                                                                padding-top: 10px;
                                                                                text-align: center;
                                                                                width: 100%;
                                                                              }
                                                                              .footer td,
                                                                              .footer p,
                                                                              .footer span,
                                                                              .footer a {
                                                                                color: #999999;
                                                                                font-size: 12px;
                                                                                text-align: center;
                                                                              }
                                                                              hr {
                                                                                border: 0;
                                                                                border-bottom: 1px solid #f6f6f6;
                                                                                margin: 20px 0;
                                                                              }
                                                                              @media only screen and (max-width: 620px) {
                                                                                  table[class=body] .content {
                                                                                      padding: 0 !important;
                                                                                   }
                                                                                   table[class=body] .container {
                                                                                     padding: 0 !important;
                                                                                     width: 100% !important;
                                                                                   }
                                                                                   table[class=body] .main {
                                                                                     border-left-width: 0 !important;
                                                                                     border-radius: 0 !important;
                                                                                     border-right-width: 0 !important;
                                                                                   }
                                                                                 }
                                                                               </style>
                                                                          </head>
                                                                    </textarea>
                                                                </div>
                                                                
                                                                <div class="input-field">
                                                                    <label for="">Predefined Footer</label>
                                                                    <textarea id="custom-textarea">
                                                                      <body class="">
                                                                        <table border="0" cellpadding="0" cellspacing="0" class="body">
                                                                          <tr>
                                                                            <td>&nbsp;</td>
                                                                            <td class="container">
                                                                              <div class="content">
                                                                              <!-- START CENTERED WHITE CONTAINER -->
                                                                                <table class="main">
                                                                                <!-- START MAIN CONTENT AREA -->
                                                                                  <tr>
                                                                                    <td class="wrapper">
                                                                                      <table border="0" cellpadding="0" cellspacing="0">
                                                                                        <tr>
                                                                                          <td>
                                                                                          </td>
                                                                                        </tr>
                                                                                      </table>
                                                                                    </td>
                                                                                  </tr>
                                                                                <!-- END MAIN CONTENT AREA -->
                                                                                </table>
                                                                              </div>
                                                                            </td>
                                                                          </tr>
                                                                        </table>
                                                                        <!-- START FOOTER -->
                                                                        <div class="footer">
                                                                          <table border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                              <td class="content-block">
                                                                                <span>{companyname}</span>
                                                                              </td>
                                                                            </tr>
                                                                          </table>
                                                                        </div>
                                                                      </body>
                                                                      </html>
                                                                    </textarea>
                                                                </div>
                                                                <hr>
                                                                <div class="input-field">
                                                                  <h6>Send Test Email</h6>
                                                                  <label for="">Send test email to make sure that your SMTP settings is set correctl</label>
                                                                  <input type="email" name="test-email" value="testemail@gmail.com">
                                                                </div>
                                                              </div>
                                                            </div>
                                                            <div style="display: none;" id="autht" class="listing-tab-content-section">
                                                              <div class="card-head">
                                                                Email Queue
                                                              </div>
                                                              <div class="card-content">
                                                                <div class="radio-flex">
                                                                  <div class="radio-container">
                                                                    <p class="radio-label--parent">Enable Email Queue</p>
                                                                    <div class="radio-options">
                                                                      <input class="radio-input" id="yes" type="radio" name="enable" value="yes" checked="checked"/>
                                                                      <label class="radio-label" for="yes">Yes</label>
                                                                      <input class="radio-input" id="no" type="radio" name="enable" value="no"/>
                                                                      <label class="radio-label" for="no">No</label>
                                                                    </div>
                                                                  </div>
                                                                </div>
                                                                <hr>
                                                                <div class="radio-flex">
                                                                  <div class="radio-container">
                                                                    <p class="radio-label--parent"> Do not add emails with attachments in the queue?</p>
                                                                    <div class="radio-options">
                                                                      <input class="radio-input" id="yes1" type="radio" name="attch" value="yes" checked="checked"/>
                                                                      <label class="radio-label" for="yes1">Yes</label>
                                                                      <input class="radio-input" id="no1" type="radio" name="attch" value="no"/>
                                                                      <label class="radio-label" for="no1">No</label>
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