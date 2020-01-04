<?php
	global $con;
    $con = mysqli_connect('localhost','root','','vedclass');

        if($con == false)
        {
            echo "Connection is not done";
        } 
        else
        {
         // echo "Connection is done sucessfully";
         }
?>