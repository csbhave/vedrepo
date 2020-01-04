<?php
        include('../dbcon.php');

        $rollno= $_POST['rollno'];
        $name = $_POST['stuname'];
        $address = $_POST['addr'];
        $phoneno = $_POST['phoneno'];
        $emailid = $_POST['emailid'];
        $semster = $_POST['semster'];
        $id = $_POST['sid'];
        $imagename = $_FILES['simg']['name'];
        $tempname = $_FILES['simg']['tmp_name'];

        move_uploaded_file($tempname,"../imgdata/$imagename");

        $qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `address` = '$address', `phoneno` = '$phoneno', `emailid` = '$emailid',`semster` = '$semster' , `image`= '$imagename' WHERE `id` = '$id'";

        $run = mysqli_query($con,$qry);
        if($run == true)
        {
            ?>
            <script>
                alert('Data Updated Sucessfully...');
                window.open('admindash.php?sid=<?php echo $id;?>','_self'); 
                
            </script>
            
            <?php
        }
?>
