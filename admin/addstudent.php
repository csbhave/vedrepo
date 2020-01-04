
<head>
<style>
form{
	position: absolute;
	left: 539px; 
	margin-top: 10px; 
	padding: 20px; 
	background: #fff; 
	text-align: left;"
}
#error{
	font-weight:bold;
	color:red;	
}
#head{
	font-weight:bold;	
}
</style>
</head>		
<!-- enctype is mandatory while store image in database -->
<form action="#" method="post" enctype="multipart/form-data">
			<div class="row-main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Student Information</h1>
	               	</div>
	            </div> 
				<div class="container" style="width: 400px;">
				<div class="main-login main-center">
				<div id="head">All Fields are Mandatory*</div><br>
				<span id="error"></span>
						<div class="form-group">
							<label for="rollno" class="cols-sm-2 control-label">Rollno*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rollno" id="rollno"  placeholder="Enter your Rollno"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
						<!-- Default unchecked -->
						<div class="custom-control custom-radio">
							<label class="custom-control-label col-sm-4" for="defaultUnchecked">Gender*</label>
							
							<input type="radio" class="custom-control-input col-sm-1" id="male" name="opt">
							<label class="custom-control-label col-sm-2" for="defaultUnchecked">Male</label>
					
							<input type="radio" class="custom-control-input col-sm-1" id="female" name="opt">
							<label class="custom-control-label col-sm-3" for="defaultUnchecked">Female</label>				
						</div>
						</div>

						<div class="form-group">
							<label for="address" class="cols-sm-2 control-label">Address*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="addr" id="addr"  placeholder="Enter your address"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="phoneno" class="cols-sm-2 control-label">Phone No*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="contact" id="contact"  placeholder="Enter your phone no"/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="emailid" class="cols-sm-2 control-label">Email ID*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="emailid" id="emailid"  placeholder="Enter your Email ID"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Semster" class="cols-sm-2 control-label">Semester*</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="sem" id="sem"  placeholder="Enter your Semester"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="image" class="cols-sm-2 control-label">Select your Image</label>
							<div class="cols-sm-10">
								<div class="input-group">
								<span class="input-group-addon"><i class="fas fa-image" aria-hidden="true"></i></span>
									<input type="file" class="form-control" name="simg" id="simg"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" id="submit" name="submit" value= "Submit" class="btn btn-primary btn-lg btn-block login-button">
						</div>
				        </div>
				         
				</div>
			</div>
	

</form>	 
<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(){
        $('#submit').click(function(){
          	var rollno = $('#rollno').val(); 
            var name = $('#name').val();
            var address = $('#addr').val();
            var phno = $('#contact').val();
            var email = $('#emailid').val();
            var semster = $('#sem').val();
            
            if(checkRollno(rollno) == false){    
                $('#error').show();    
                return false;    
            }else if(checkName(name) == false){    
                $('#error').show();     
                return false;               
            }else if(checkAddress(address) == false){    
                $('#error').show();     
                return false;       
			}else if(checkMobileNumber(phno) == false){    
                $('#error').show();     
                return false;       
            }else if(checkEmail(email) == false){    
                $('#error').show(); 
                return false;
            }else if(checkSemster(semster) == false){    
                $('#error').show(); 
                return false;
            }else{
            alert("Congragulation!!! Your Account open Sucessfully...");
            }

//function used to check valid Rollno
function checkRollno(rollno){
        var pattern_rollno = /^[0-9]{5}$/;
        if(pattern_rollno.test(rollno)){
            $('#error').html('');
			$('#rollno').css('border','1px solid black');
        	
            return true;
        }else{
	    $('#error').html('***Please Enter Valid 5 Digit RollNo');
        $('#error').css('color','red');
		$('#rollno').css('border','2px solid red');
        return false;
        }
    }


//function used to check valid name
    function checkName(name){        
		var pattern_text = /^[a-zA-Z]{3,30}$/;      
        if(pattern_text.test(name)){
            $('#error').html('Name Lookings Good');    
            $('#name').css('border',' 1px solid black');
            return true;       
            }else{
            $('#error').html('***Name Should Be between 3 to 30 letters only');
                $('#error').css('color','red');
				$('#name').css('border','2px solid red');
       
                return false;
            }
        }
		       
//function used to check valid Address
    function checkAddress(address){

        var pattern_text = /^[a-zA-Z]{3,30}$/;        
        if(pattern_text.test(address)){

			$('#error').html('address lookings good');
			$('#addr').css('border','1px solid black');
			
			return true;       
            }else{

				$('#error').html('***Address Should Be between 3 to 30 letters only');
				$('#error').css('color','red');
				$('#addr').css('border','2px solid red');
			
				return false;
            }
        }
		
//  function used to check valid phone no
    function checkMobileNumber(phno){
        var pattern_mobile = /^[0-9]{10}$/;
        if(pattern_mobile.test(phno)){
            $('#error').html('');
			$('#contact').css('border','1px solid black');

			return true;
        }else{
        $('#error').html('***Please Enter Valid 10 Digit Phone No');
		$('#error').css('color','red');
		$('#contact').css('border','2px solid red');
		
        return false;
        }
    }
// //function used to check valid email
    // function checkEmail(email)
    // {
    //     //regular expression for email
    //     // var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    //     var pattern_email = /^[a-zA-Z_]{3,}@[a-zA-Z]{3,}[.]{1}[a-zA-Z.]{2,6}$/;
    //     if(pattern_email.test(email)){
    //         $('#error').html('');
    //         return true;
    //     } else {
    //         $('#error').html('***Please Enter Valid Email-ID');
    //         $('#error').css('color','red');  
    //         return false;
    //     }
    // }

// //function used to check valid semester
function checkSemster(semster){
        var pattern_text = /^[a-zA-Z.]{3,30}$/;        
        if(pattern_text.test(semster)){
			$('#error').html('');
            $('#sem').css('color','1px solid black');
            return true;       
            }else{
            $('#error').html('***Semster Should Be between 3 to 30 letters only');
                $('#error').css('color','red');
				$('#sem').css('color','1px solid red');
            
				return false;
            }
        } 
		});
});
</script>

    	<?php include('../admin/footer.php'); ?>
<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');

		$rollno= $_POST['rollno'];
		$name = $_POST['name'];
		$gen = $_POST['opt'];
		$addr = $_POST['addr'];
		$phoneno = $_POST['contact'];
		$emailid = $_POST['emailid'];
		$sem = $_POST['sem'];
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname,"../imgdata/$imagename");

		$qry = "INSERT INTO `student`(`rollno`, `name`, `gender`, `address`, `phoneno`, `emailid`, `semster`,`image`) VALUES 
		('$rollno','$name','$gen','$addr','$phoneno', '$emailid', '$sem','$imagename')";

		$run = mysqli_query($con,$qry);
		if($run == true)
		{
			?>
			<script>
				alert('Data Inserted Sucessfully...');
			 	window.open('admindash.php','_self');                
			</script>

			<?php
		}
	}
?>