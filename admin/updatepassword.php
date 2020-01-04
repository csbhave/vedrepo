<?php 	
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$sql=mysqli_query($conn,"select * from login where pass='$op'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	
	$sql=mysqli_query($conn,"update login set pass='$np' where username='$admin'");
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  password not matched with Confirm Password </font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<form method="post" style="position: absolute;left: 539px; margin-top: 10px; padding: 20px; background: #fff; text-align: left;">
<h2 style="text-align: center">Update Password</h2>	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="padding-top: 10px;">
		<div class="col-sm-8">Enter YOur Old</div>
		<div class="col-sm-8">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row"style="padding-top: 10px;">
		<div class="col-sm-8">Enter YOur New Password</div>
		<div class="col-sm-8">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row"style="padding-top: 10px;">
		<div class="col-sm-8">Enter YOur Confirm Password</div>
		<div class="col-sm-8">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="padding-top: 10px;">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Password" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	