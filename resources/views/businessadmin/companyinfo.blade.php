@extends('businessadmin.layouts.ani')

<!-- END: Head-->

<body>

    <!-- BEGIN: Page Main-->
<div class="progressregistration">
    <div class="container">
        <form id="regForm" action="#" class="progressform">
            
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
                <h5>Address</h5>
                <p>Make your quotes, job sheets and invoices look professional by adding your company address.</p>
                <div class="input-field col s12">
                    <label>Post Code</label>
                    <input type="text" placeholder=""/>
                </div>
                <div class="input-field col s12">
                    <label>Address</label>
                    <textarea type="text" placeholder=""></textarea>
                </div>
              
                <div class="input-field col s12">
                    <label>Town/City</label>
                    <input type="text" placeholder=""/>
                </div>
                <div class="input-field col s12">
                    <label>State</label>
                    <input type="text" placeholder=""/>
                </div>
                <div class="input-field col s12">
                    <label>Country</label>
                    <input type="text" placeholder=""/>
                </div>
               
            </div>
            <div class="tab">
                <h5>Tax</h5>
                <p>If you charge your customers, add the details here.</p>
                <div class="input-field col s12 mt40 mb30">
                    <div class="switch"> <label>I am VAT Registered</label>
                        <label>
                        <input type="checkbox">
                        <span class="lever"></span>
                        Yes
                        </label>
                    </div>
                </div>
                <div class="input-field col s12 mt20">
                    <label>VAT Registration Number</label>
                    <input type="text" placeholder=""/>
                </div>
            </div>
            <div class="tab">
                 <h5>Select Template for invoices</h5>
                 <p>Choose a template for your quotes, job sheets and invoices. If you can't make your own mind up now, don't worry it's easy to change later.</p>
                 <div class="templatessection">
                  <img src="../app-assets/images/gallery/invoice1.png" alt="">
                </div>
                <div class="choosetemplate">
                    <button class="selecttemp" >  <img src="../app-assets/images/gallery/invoice1.png" alt=""></button>
                    <button  class="selecttemp">  <img src="../app-assets/images/gallery/invoice2.webp" alt=""></button>
                    <button  class="selecttemp">  <img src="../app-assets/images/gallery/invoice3.webp" alt=""></button>
                    <button  class="selecttemp">  <img src="../app-assets/images/gallery/invoice4.webp" alt=""></button>
                </div>    
            </div>
            <div class="tab">
                 <h5>Add Logos</h5>
                
                 <div class="mt40 col s12">
                    <input type="file" placeholder=""/>
                </div>

            </div>
            <div style="overflow:auto;">
                <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div class="progressbar">
                <span class="step step1">Company Address</span>
                <span class="step">Tax</span>
                <span class="step">Layout</span>
                <span class="step">Logo</span>
            </div>
        </form> 
    </div>
</div>       

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
        }

        function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
        }

        function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = true;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
        }

        function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
        }
    </script>

<!-- END: Page Main-->

  