<?php include('../admin/session.php');
      		  include('../admin/header.php');      
        	 include('../admin/script.php');       
	         include('../admin/navbar.php'); 
	         include('../admin/sidebar.php'); 
             include('../admin/footer.php'); ?>
             <?php
    include('../dbcon.php');
    $sid = $_GET['sid'];
    $qry = "SELECT * FROM `student` WHERE `id`='$sid'";
    $run = mysqli_query($con,$qry);
    $data = mysqli_fetch_assoc($run);
?>
<head>
    <style>
    .container{
    background:white;
    position:absolute;
    top: 150px;
    width: 420px;
    left: 40%;
    padding: 20px;
    }
    </style>
</head>
<div class="row-main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 style="position: absolute;left: 40%;" class="title">Update Student Information</h1>
                    </div>
                </div>
    </div> 
<div class="container">
<form action="updatedata.php" method="POST" enctype="multipart/form-data">
        
    <div class="form-group">
        <label for="rollno" class="cols-sm-2 control-label">Rollno</label>
            <div class="cols-sm-10">
                <div class="input-group col-md-12">
                   <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="rollno" id="rollno"value="<?php echo $data['rollno'];?>" placeholder="Enter your Rollno"/>
                </div>
            </div>
    </div>
    <div class="form-group">
        <label for="name" class="cols-sm-2 control-label">Name</label>
            <div class="cols-sm-10">
             <div class="input-group col-md-12">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <input type="text" class="form-control" name="stuname" id="stuname"value="<?php echo $data['name'];?>"  placeholder="Enter your name"/>
            </div>
         </div>
   </div>           
   <div class="form-group">
        <label for="add" class="cols-sm-2 control-label">Address</label>
            <div class="cols-sm-10">
             <div class="input-group col-md-12">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <input type="text" class="form-control" name="addr" id="addr"value="<?php echo $data['address'];?>"  placeholder="Enter your name"/>
            </div>
         </div>
   </div>           
   <div class="form-group">
        <label for="cont" class="cols-sm-2 control-label">Contact No</label>
            <div class="cols-sm-10">
             <div class="input-group col-md-12">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <input type="text" class="form-control" name="phoneno" id="phoneno"value="<?php echo $data['phoneno'];?>"  placeholder="Enter your name"/>
            </div>
         </div>
   </div>           
   <div class="form-group">
        <label for="email" class="cols-sm-2 control-label">Email ID</label>
            <div class="cols-sm-10">
             <div class="input-group col-md-12">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <input type="text" class="form-control" name="emailid" id="emailid" value="<?php echo $data['emailid'];?>"  placeholder="Enter your name"/>
            </div>
         </div>
   </div>           
   <div class="form-group">
        <label for="sem" class="cols-sm-2 control-label">Semster</label>
            <div class="cols-sm-10">
             <div class="input-group col-md-12">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <input type="text" class="form-control" name="semster" id="semster" value="<?php echo $data['semster'];?>"  placeholder="Enter your name"/>
            </div>
         </div>
   </div>           
   <div class="form-group">
        <label for="img" class="cols-sm-2 control-label">Image</label>
            <div class="cols-sm-10">
             <div class="input-group col-md-12">
                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
               <input type="file" class="form-control" name="simg">
            </div>
         </div>
   </div>           
  
            <input type="hidden" name="sid" value="<?php echo $data['id'];?>" /> 
            <div class="form-group col-md-4"style="position: relative;left: 25%;">
                <input type="submit" name="submit" value= "Update" class="btn btn-primary btn-lg btn-block login-button">
            </div>
</form>
</div>

      