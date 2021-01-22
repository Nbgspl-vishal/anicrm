@include('businessadmin.include.head')

<!-- END: Head-->

<body>

    <!-- BEGIN: Page Main-->

    
        
    <div class="container">
        <div class="login-section">
            <div class="login-container">
                <h3>ANI CRM</h3>
                <h6 class="mb50">The #1 Quoting, invoicing and Small Business app</h6>
                <h5 class="mb20">Login or Register</h5>
                <div class="text-box-cont">
                    <form action="{{url('login')}}" method="post">
                        @csrf
                    <div class="input-field col s12">
                        <label>Email Address</label>
                        <input type="email" required="" name="email" placeholder="Email Address"/>
                    </div>
                    <div class="input-field col s12">
                            <label>Password</label>
                        <input type="password" required="" name="password" placeholder="Password"/>
                    </div>
                    <div class="input-field col s12 ">
                        <div class="row">
                            <div class="col s6">
                                <button type="submit" class="btn loginbtn mt20">Login</button>
                            </div>
                            <div class="col s6">
                                <a href="{{url('Register')}}" class="btn regbtn mt20">Register</a>
                            </div>
                        </div>
                    </div>
                    <div class="input-field col s12 ">
                        <div class="row">
                            <div class="col s6  mt10">
                                <a href="#" class="forpassword ">Forget Password?</a>
                            </div>
                            <div class="col s6 text-right  mt10">
                                <label>
                                    <input type="checkbox" name="remember" class="filled-in checkbox-green"  />
                                    <span>Remember?</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
                    <div>
                        <p class="tncpp mt30">  By using ANICRM you are agreeing to <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                    </div>
                
                
                </div>
            </div>
        </div>            
    </div>
       
    

<!-- END: Page Main-->

  