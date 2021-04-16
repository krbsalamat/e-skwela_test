</div>

<footer class="bg-dark text-center text-white navbar-fixed-bottom footer">
    <div class="container p-4">
        <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa fa-facebook-f"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa fa-twitter"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa fa-google"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa fa-instagram"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa fa-linkedin"></i></a>

            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
            <i class="fa fa-github"></i></a>
        </section>
        
        <section class="mb-4">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
            repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
            eum harum corrupti dicta, aliquam sequi voluptate quas.
        </p>
        </section>
        
        <section class="">
        
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>
        
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                    <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                    <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                    <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                    <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="#!" class="text-white">Link 1</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 2</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 3</a>
                    </li>
                    <li>
                        <a href="#!" class="text-white">Link 4</a>
                    </li>
                </ul>
            </div>
        </div>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="#">E-Skwela</a>
    </div>
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/smartwizard@5/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="<?php echo $eskwela_home; ?>/includes/jquery.password-validation.js"></script>

<script>
    
$(document).ready(function(){
    $("#stu").on("click", function(e){
        e.preventDefault();
        $("#stu, #studentTab, #stuRegis").addClass("active");
        $("#tea, #teacherTab, #teaRegis").removeClass("active");
    })
    $("#tea").on("click", function(e){
        e.preventDefault();
        $("#tea, #teacherTab, #teaRegis").addClass("active");
        $("#stu, #studentTab, #stuRegis").removeClass("active");
    })
    $("#emailButtonStu").on("click",function(e){
        e.preventDefault();
        $("#emailRegTea").removeClass("active");
        $("#emailRegStu").addClass("active");
        $("#teaEmail").val("");
    })
    $("#emailButtonTea").on("click",function(e){
        e.preventDefault();
        $("#emailRegStu").removeClass("active");
        $("#emailRegTea").addClass("active");
        $("#stuEmail").val("");
    })
    $("#prev-2").on("click", function(){
        $("#step-1, #step1").addClass("active");
        $("#step2, #step3, #step4, #step-2, #step-3, #step-4").removeClass("active");
    })
    $("#prev-3").on("click", function(){
        $("#step-2, #step2").addClass("active");
        $("#step1, #step3, #step4, #step-1, #step-3, #step-4").removeClass("active");
    })
    $("#prev-4").on("click", function(){
        $("#step-3, #step3").addClass("active");
        $("#step1, #step2, #step4, #step-2, #step-1, #step-4").removeClass("active");
    })
    //button 1
    $("#next-1").click(function(e){
        e.preventDefault();
        
        if($("#teaEmail").val() == ''){
            if($("#emailRegTea").hasClass('active')){
                $("#teaEmailError").html('Please input an email address.');
                $("#step2").addClass("disabled");
                return false;
            }
        }else if(!validateTeaEmail($("#teaEmail").val())){
            $("#teaEmailError").html('Enter a valid email address');
            return false;
        }
        else{
            $("#step-2, #step2").addClass("active");
            $("#step1, #step3, #step4, #step-1, #step-3, #step-4").removeClass("active");
            $("#step2").removeClass("disabled");
            $("#teaEmailError").html('');
        }
        if($("#stuEmail").val() == ''){
            if($("#emailRegStu").hasClass('active')){
                $("#stuEmailError").html('Please input an email address.');
                $("#step2").addClass("disabled");
                return false;
            }
        }else if(!validateStuEmail($("#stuEmail").val())){
            $("#stuEmailError").html('Enter a valid email address');
            return false;
        }else{
            $("#step-2, #step2").addClass("active");
            $("#step1, #step3, #step4, #step-1, #step-3, #step-4").removeClass("active");
            $("#step2").removeClass("disabled");
            $("#stuEmailError").html('');
        }
        function validateStuEmail($stuEmail){
            var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return emailReg.test($stuEmail);
        }
        function validateTeaEmail($teaEmail){
            var emailReg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return emailReg.test($teaEmail);
        }
    })//BUTTON2
    $("#next-2").click(function(e){
        e.preventDefault();
        $("#firstNameError").html('');
        $("#lastNameError").html('');
        $("#dobDayError").html('');
        $("#dobMonthError").html('');
        $("#dobYearError").html('');
        var day = parseInt($("#dobDay").val(),10);
        var year = parseInt($("#dobYear").val(),10);
        if($("#firstName").val()==''){
            $("#firstNameError").html('Please input a fname');
            $("#step3").addClass("disabled");
            return false;
        }else if(!isNaN($("#firstName"))){
            $("#firstNameError").html('First name cannot contain numbers');
            $("#step3").addClass("disabled");
            return false;
        }else if($("#lastName").val()==''){
            $("#lastNameError").html('Please input a lname.');
            $("#step3").addClass("disabled");
            return false;
        }else if(!isNaN($("#lastName"))){
            $("#lastNameError").html('Last name cannot contain numbers');
            $("#step3").addClass("disabled");
            return false;
        }else if($("#dobDay").val()==''){
            $("#dobDayError").html('Please input a day');
            $("#step3").addClass("disabled");
            return false;
        }else if(day>31 || day<=0){
            $("#dobDayError").html('Please input a valid day');
            $("#step3").addClass("disabled");
            return false;
        }else if($("#dobYear").val()==''){
            $("#dobYearError").html('Please input a year');
            $("#step3").addClass("disabled");
            return false;
        }else if(year>2020 || year<1930){
            $("#dobYearError").html('Please enter a valid year. You\'re not that old, are you?');
            $("#step3").addClass("disabled");
            return false;
        }else{
            $("#step-3, #step3").addClass("active");
            $("#step1, #step2, #step4, #step-2, #step-1, #step-4").removeClass("active");
            $("#step3").removeClass("disabled");
        }
    })//button3
    $("#next-3").click(function(e){
        e.preventDefault();
        $("#passwordError").html('');
        if(!$("#usercheckdiv").hasClass('has-success')){
            return false;
        }
        if($("#pwd").val()!= $("#pwd2").val()){
            $("#passwordError").html('Password mismatch');
            return false;
        }
        $("#pwd").passwordValidation({"confirmField": "#pwd2"}, function(element, valid, match, failedCases) {
            if(valid && match){
                $("#step-4, #step4").addClass("active");
                $("#step1, #step2, #step3, #step-2, #step-1, #step-3").removeClass("active");
            }else if(!valid || !match){
                $("#passwordError").html('Please complete the password requirement');
                return false;
            }
        });
        if($("#usercheckdiv").hasClass('has-error')){
            $("#usercheck").addClass("text-danger");
        }else if($("#usercheckdiv").hasClass('has-success')){
            $("#usercheck").addClass("text-success");
        }
        
    })
    $("#landingHomeButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingHomeDiv").addClass("active");
    })
    $("#landingProfileButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingProfileDiv").addClass("active");
    })
    $("#landingBookingsButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingBookingsDiv").addClass("active");
    })
    $("#landingHistoryButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingHistoryDiv").addClass("active");
    })
    $("#landingCoursesButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingCoursesDiv").addClass("active");
    })
    $("#landingPayoutButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingPayoutDiv").addClass("active");
    })
    $("#landingProgressButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingProgressDiv").addClass("active");
    })
    $("#landingUploadButton").click(function(e){
        e.preventDefault();
        $(".sel").removeClass("active");
        $("#landingUploadDiv").addClass("active");
    })
    

   
    
})  
</script>
<script>
//PASSWORD VALIDATION
$("#pwd").passwordValidation({"confirmField": "#pwd2"}, function(element, valid, match, failedCases) {
    $("#pwdError").html("<pre>" + failedCases.join("\n") + "</pre>");
    if(valid) $(element).css("border","2px solid green");
    if(!valid) $(element).css("border","2px solid red");
    if(valid && match) $("#pwd2").css("border","2px solid green");
    if(!valid || !match) $("#pwd2").css("border","2px solid red");
});
</script>
<script>
    //USERNAME VALIDATION
$(document).ready(function(){
    $("#usernameRegis").keyup(function(){
        var usercheck = $(this).val();
        console.log(usercheck);
        $("#usercheck").html('<img src="includes/loading.gif" width="150 />');
        $.post("../includes/check.php", {user_name:usercheck},function(data){
            if(data.status == true){
                $("#usercheck").parent('div').removeClass('has-error text-danger').addClass('has-success text-success');
            }else{
                $("#usercheck").parent('div').removeClass('has-success text-success').addClass('has-error text-danger');
            }
            $("#usercheck").html(data.msg);
        }, 'json');
    });
});

$(document).ready(function(){
    $("#landingUsername").keyup(function(){
        var usercheck = $(this).val();
        console.log(usercheck);
        $("#landingUsercheck").html('<img src="includes/loading.gif" width="150 />');
        $.post("../includes/check.php", {user_name:usercheck},function(data){
            if(data.status == true){
                $("#landingUsercheck").parent('div').removeClass('has-error text-danger').addClass('has-success text-success');
            }else{
                $("#landingUsercheck").parent('div').removeClass('has-success text-success').addClass('has-error text-danger');
            }
            $("#landingUsercheck").html(data.msg);
        }, 'json');
    });
});
</script>

</html>