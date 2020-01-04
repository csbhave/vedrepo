<?php
		include('dbcon.php');

if(isset($_POST['submit']))
	{
		extract($_POST);

		$qry = "INSERT INTO enquiry( fname,emailid , phoneno, cmessage) VALUES 
		('$fname','$emailid','$phoneno','$msg')";

		$run = mysqli_query($con,$qry);
		header('location:index.php');
	}
?>