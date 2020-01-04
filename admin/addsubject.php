
<form action="#" method="post" enctype="multipart/form-data" style="position: absolute;left: 539px; margin-top: 10px; padding: 20px; background: #fff; text-align: left;">
			<div class="row-main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Teachers Information</h1>
	               	</div>
	            </div> 
				<div class="container" style="width: 400px;">
				<div class="main-login main-center">
						<div class="form-group">
							<label for="rollno" class="cols-sm-2 control-label">Teacher_code</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="t_code" id="t_code" placeholder="Enter Teacher Code"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="Semster" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="password" id="password" placeholder="Enter your Password"/>
								</div>
							</div>
						</div>
<!-- 
						<div class="form-check">
							<label for="sub" class="cols-sm-2 control-label">Select Your Subject</label>
							<div class="cols-sm-10">
							<input class="form-check-input" type="checkbox" value="" name="selectall[]" id="selectall">
								  <label class="form-check-label" for="selectall">
								    Select All
								  </label>
						</div> -->
							
						<div class="form-group">
							<label for="dept" class="cols-sm-2 control-label">Department</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="dept" id="dept"  placeholder="Enter your Department"/>
								</div>
							</div>
						</div>
<!-- 
							<div class="cols-sm-10">
							<input class="form-check-input" type="checkbox" value="sub1" name="sub[]" id="sub1">
								  <label class="form-check-label" for="sub1">
								    Subject 1
								  </label>
						</div>

						<div class="cols-sm-10">
							<input class="form-check-input" type="checkbox" value="sub2" name="sub[]" id="sub2">
								  <label class="form-check-label" for="sub2">
								    Subject 2
								  </label>
						</div>

						<div class="cols-sm-10">
							<input class="form-check-input" type="checkbox" value="sub3" name="sub[]" id="sub3">
								  <label class="form-check-label" for="sub3">
								    Subject 3
								  </label>
						</div> -->

					
						<div class="form-group" style="padding-top:20px; ">
						    <input type="hidden" name="sid" value="<?php echo $data['id'];?>" /> 
							<input type="submit" name="submit" value= "Submit" class="btn btn-primary btn-lg btn-block login-button">
						</div>
				         </div>
				     </div>
				</div>
			</div>
	

		<script type="text/javascript" src="../assets/bootstrap-4.3.1/js/bootstrap.min.js"></script>
</form>	
<script src="../assets/jquery-3.4.1.min.js"> </script> 
<!-- <script>
		$(document).ready(function(){
	
			$('#selectall').change(function(){
				$('input:checkbox').prop('checked',$(this).prop('checked'));
			});
	

		});	
	</script> -->
<?php

if(isset($_POST['submit']))
	{
    	
   	include('../dbcon.php');

		$t_code= $_POST['t_code'];
		$fname = $_POST['name'];
		$pass = $_POST['password'];
		// $subject = $_POST["sub"];
    	// $b = implode(",",$subject);
    	$dept = $_POST['dept'];
	
		$qry = "INSERT INTO `teachers`(`teacher_code`, `name`, `password`, `dept`) VALUES 
		('$t_code','$fname','$pass','$dept')";

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
