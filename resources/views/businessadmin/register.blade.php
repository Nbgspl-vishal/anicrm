@include('businessadmin.include.head')
<!-- END: Head-->

<body>

    <!-- BEGIN: Page Main-->

    
<div class="registration-container">        
    <div class="container">
        <div class="reg-section">
             <h3 class="text-white text-center mb30">ANI CRM</h3>
            <div class="registrationsection">
              
                <h5 class="mb40 regtitle">Registration</h5>
                <div class="text-box-cont">
                 <form action="{{url('Register')}}" method="post"  onsubmit ="return verifyPassword()">
                    @csrf
                    <div class="input-field col s12">
                        <div class="row">
                            <label class="col s5">What is your Business Name?</label>
                            <input class="col s7" type="text" type="mail" name="b_email" required="" placeholder="Email Address"/>
                        </div>
                    </div>
                    <div class="input-field col s12">
                       <div class="row">
                            <label class="col s5"> What does your Business do?</label>
                            <select class="browser-default col s7" name="business" required="">
                                <option value="">Select Business Type</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>   
                    </div>
                    <div class="input-field col s12">
                       <div class="row">
                            <label class="col s5">How many work in it?</label>
                                 <label >
                                    <input class="with-gap radio-green" required="" name="persons" type="radio" value="justme"  />
                                    <span>Just Me</span>
                                </label> 
                                <label>
                                    <input class="with-gap radio-green" name="persons" type="radio"  value="2-3" />
                                    <span>2-3</span>
                                </label> 
                                <label>
                                    <input class="with-gap radio-green" name="persons" type="radio"  value="4-6" />
                                    <span>4-6</span>
                                </label> 
                                <label>
                                    <input class="with-gap radio-green" name="persons" type="radio"  value="7+" />
                                    <span>7+</span>
                                </label>
                        </div>   
                    </div>
                    <hr class="hrgrey">

                     <div class="input-field col s12">
                        <div class="row">
                            <label class="col s5"> Full Name</label>
                            <input class="col s7" type="text" name="name"  placeholder="Enter Name"/>
                            <p class="col s12 extratext">
                               <span class="text-green"> Why do we ask this? </span> Your name is an essential point of contact for your customers.
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="row">
                            <label class="col s5">Phone Number</label>
                            <input class="col s7" type="tel" name="mobile" placeholder="Enter Phone Number"/>
                            <p class="col s12 extratext">
                               <span class="text-green"> Why do we need this? </span> ANICRM needs your telephone number to put on your quotes, invoices and other documents. This can be turned off.
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="row">
                            <label class="col s5">Email Address</label>
                            <input class="col s7" type="email" name="email" placeholder="Enter Email Address"/>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="row">
                            <label class="col s5">Password</label>
                            <input class="col s7" type="password" name="password" id="password" placeholder="Enter Password"/>
                            <span id = "message" style="color:red"> </span> <br><br>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <div class="row">
                            <label class="col s5">Confirm Password</label>

                            <input class="col s7" type="password" id="cpassword" placeholder="Confirm Password"/>
                            <span id = "message1" style="color:red"> </span> <br><br>

                        </div>
                    </div>

                    <div class="input-field col s12 ">
                    
                                 <button type="submit" class="btn loginbtn regbt mt20">Finish</button>
                           
                        </div>
                    </div>
                   <form>
                    <div>
                        <p class="mt30 tncreg">  By using ANICRM you are agreeing to <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                    </div>
                
                
                </div>
            </div>
        </div>            
    </div>
</div>       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>

<script type="text/javascript">
    function verifyPassword() {  
 var pw = document.getElementById("password").value;  
 var cpw = document.getElementById("cpassword").value;  
  //check empty password field  
  if(pw == "") {  
     document.getElementById("message").innerHTML = "**Fill the password please!";  
     return false;  
  }  
  if(cpw == "") {  
     document.getElementById("message1").innerHTML = "**Fill the Confirm password please!";  
     return false;  
  }  
   
 //minimum password length validation  
  if(pw.length < 8) {  
     document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
     return false;  
  }  
  if (pw!=cpw) {
    document.getElementById("message1").innerHTML = "**Password Not Match!";
    return false; 
  }
//maximum length of password validation  
  if(pw.length > 15) {  
     document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
     return false;  
  } else {  
      
  }  
}  





</script>>
<!-- END: Page Main-->

  