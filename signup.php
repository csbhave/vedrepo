<?php include('header.php')?>

<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center font-weight-bold"><h1>Registration</h1></div>
                        <div class="card-body">
                            <form name="my-form" onsubmit="return validform()" action="#" method="post">
                                <div class="form-group row">
                                    <label for="username" class="col-md-2 col-form-label text-md-right font-weight-bold">Username*</label>
                                    <div class="col-md-6">
                                        <input type="text" id="username" class="form-control" name="username">
                                        <span id="errorusername">abcd</span>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-2 col-form-label text-md-right font-weight-bold">Password*</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password">
                                        <span id="errorpassword">abcd</span>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label for="phoneno" class="col-md-2 col-form-label text-md-right font-weight-bold">Phone No*</label>
                                    <div class="col-md-6">
                                        <input type="text" id="phoneno" class="form-control" name="phoneno">
                                        <span id="errorphno">abcd</span>
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label for="emailid" class= "col-md-2 col-form-label text-md-right font-weight-bold">Email Address*</label>
                                    <div class="col-md-6">
                                        <input type="text" id="emailid" name="emailid" class="form-control">
                                        <span id="erroremailid">abcd</span>
                                    </div>

                                    
                                </div>

                                <div class="form-group row">
                                    <label for="bdate" class="col-md-2 col-form-label text-md-right font-weight-bold">Birth Date*</label>
                                    <div class="col-md-6">
                                        <input type="date" id="bdate" name="bdate" class="form-control">
                                        <span id="errorbdate">abcd</span>
                                    </div>

                                    
                                </div>

                                <div class="form-group row">
                                    <label for="sque" class="col-md-2 col-form-label text-md-right font-weight-bold">Security Question*</label>
                                    <div class="col-md-6">
                                    <input type="text" id="sque" class="form-control" name="sque">
                                    <span id="errorsque">abcd</span>                                        

                                    </div>

                                    
                                </div>

                                <div class="form-group row">
                                    <label for="sans" class="col-md-2 col-form-label text-md-right font-weight-bold">Answer*</label>
                                    <div class="col-md-6">
                                        <input type="text" id="sans" class="form-control" name="sans">
                                        <span id="errorsans">abcd</span>
                                    </div>
                                    
                                    
                                </div>

                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" id="submit" name="submit" value="Register" class="btn btn-primary">
                                         
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
<!-- <script src="./js/signup.js"></script> -->
<script src="./assets/jquery-3.4.1.min.js"></script>
<script>

    $(document).ready(function(){
        $('#submit').click(function(){
            
            var user = $('#username').val();
            var pass = $('#password').val();
            var phno = $('#phoneno').val();
            var email = $('#emailid').val();
            var bdate = $('#bdate').val();
            var secque = $('#sque').val();
            var secans = $('#sans').val();
            
            // if(checkUsername(user) == false){    
            //     $('#errorusername').show();    
            //     return false;    
            // }else if(checkPassword(pass) == false){    
            //     $('#errorpassword').show();     
            //     return false;               
            // }else if(checkMobileNumber(phno) == false){    
            //     $('#errorphno').show();     
            //     return false;       
            // }else if(checkEmail(email) == false){    
            //     $('#erroremailid').show(); 
            //     return false;
            // }else
             if(checkbdate(bdate) == false){    
                $('#errorbdate').show(); 
                return false;
            }else if(checksecque(secque) == false){    
                $('#errorsque').show(); 
                return false; 
            }else if(checksecans(sans) == false){    
                $('#errorsque').show(); 
                return false;          
            }else{
            alert("Congragulation!!! Your Account open Sucessfully...")
            }
    
//function used to check valid Username
    function checkUsername(user){
        var pattern_text = /^[a-zA-Z.]{3,30}$/;        
        if(pattern_text.test(user)){
            $('#errorusername').html('UserName is Available');    
            $('#errorusername').css('color','green');
            return true;       
            }else{
            $('#errorusername').html('***Username Should Be between 3 to 10 letters only');
                $('#errorusername').css('color','red');
                return false;
            }
        }
//password Validation
    function checkPassword(pass){ 
            var pattern_pass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;          
            if(pattern_pass.test(pass)){
                $('#errorpassword').html('');
                return true;       
            }else{
            $('#errorpassword').html('***password Must have 8 to 16 letters and use atleast 1 symbol, 1 Number');
                $('#errorpassword').css('color','red');
                return false;
            }
        }
       
//function used to check valid phone no
    function checkMobileNumber(phno){
        var pattern_mobile = /^[0-9]{10}$/;
        if(pattern_mobile.test(phno)){
            $('#errorphno').html('');
            return true;
        }else{
        $('#errorphno').html('***Please Enter Valid 10 Digit Phone No');
        $('#errorphno').css('color','red');
        return false;
        }
    }
//function used to check valid email
    function checkEmail(email)
    {
        //regular expression for email
        // var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        var pattern_email = /^[a-zA-Z_]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;
        if(pattern_email.test(email)){
            $('#erroremailid').html('');
            return true;
        } else {
            $('#erroremailid').html('***Please Enter Valid Email-ID');
            $('#erroremailid').css('color','red');  
            return false;
        }
    }
//function check to valid birthdate
    function checkbdate(bdate){
        var pattern_bdate = /^([0-2][0-9]|(3)[0-1])(\-)(((0)[0-9])|((1)[0-2]))(\-)\d{4}$/;
        if(pattern_bdate.test(bdate)){
            $('#errorbdate').html('');
            return true;
        }else{
        $('#errorbdate').html('***Please Enter Valid Birth Date');
        $('#errorbdate').css('color','red');
        return false;
        }
    }
//function check to valid sec_ques
    function checksecque(secque){
        if(pattern_text.test(secque)){
            $('#errorsque').html('');
            return true;
        }else{
        $('#errorsque').html('***Please Enter Valid valid Question');
        $('#errorsque').css('color','red');
          
        return false;

        }
    }
//function check to valid sec_ans
    function checksecans(sans){
        if(pattern_text.test(secque)){
            $('#errorsans').html('');
            return true;
        }else{
            $('#errorsans').html('***Please Enter Valid valid Answer');
            $('#errorsans').css('color','red');
            return false;
        }
    }
    });
});
</script>
<?php 
    include('dbcon.php');
?>