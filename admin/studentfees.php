<?php include('header.php')?>

<div class="container" style="width: 30%;position: absolute;left: 460px;padding: 50px; background: #fff;">
			<div class="row-main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Student Fees</h1>
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="studentfees.php">
						
						<div class="form-group">
							<label for="rollno" class="cols-sm-2 control-label">Rollno</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rollno" id="rollno"  placeholder=""/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder=""/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="subject" class="cols-sm-2 control-label">Subject</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="subject" id="subject"  placeholder=""/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="tot_fees" class="cols-sm-2 control-label">Total Fees</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="tot_fees" id="tot_fees"  placeholder=""/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="paid_fees" class="cols-sm-2 control-label">Paid Fees</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="paid_fees" id="paid_fees"  placeholder=""/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="rem_fees" class="cols-sm-2 control-label">Remaining Fees</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="rem_fees" id="rem_fees"  placeholder=""/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="date" class="cols-sm-2 control-label">Date</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="rdate" id="rdate"  placeholder=""/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" name="submit" value= "Submit" class="btn btn-primary btn-lg btn-block login-button">
						</div>
						 
					</form>
				</div>
			</div>
		</div>