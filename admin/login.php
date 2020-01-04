
<?php
include('../dbcon.php');

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo "$username";
    echo "$password";


    // function protect($string)
    // {
    //     $string= mysqli_real_escape_string(trim(strip_tags(addcslashes(String))));
    //     return $string;
    // }
    
    $qry="SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'";
    $run= mysqli_query($con,$qry);  
     $row = mysqli_num_rows($run);   //return no of rows from query 
    if($row<1)
    {
        ?>
        <script>
            alert('Username or Password does not Match !!!');
            window.open('index.php','_self');
        </script>
        <?php
    }
    else
    {
       $data = mysqli_fetch_assoc($run);       //fetch data from database  

       $id =   $data['id'];                     //tracking admin session throught id
     //  echo "id = ".$id;
    
        session_start();

       $_SESSION['uid']=$id;
        header('location:admindash.php');
    
    }
}
?>