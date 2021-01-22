@include('superadmin.layout.head')

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

                        

                        </div>

                    </div>

                    <div class="input-field col s12 ">

                        <div class="row">


                            <div class="col s6 text-right  mt10">

                              

                            </div>

                        </div>

                    </div>

                </form>

                    

                

                

                </div>

            </div>

        </div>            

    </div>

       

    



<!-- END: Page Main-->



  