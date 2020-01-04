<div class="">
<form action="#" method="post" style="width:850px;position:absolute;left:20%;top:20%;background:rgba(0,0,0,0.8);
    color:white;">

            <div class="row-main" style="">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <h1 style="position: relative; right: 200px;" class="title">Update Student Information</h1>
                    </div>
                </div> 
                <div class="container">
                <div class="row">
                <div class="col-md-3">
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="test.php">
                        <div class="form-group">
                            <label for="rollno" class="cols-sm-2 control-label">Rollno</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="rollno" id="rollno"  placeholder="Enter your Rollno"/>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="stuname" id="stuname"  placeholder="Enter your name"/>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group"style="position: relative; top:20px; width: 143px; ">
                            <input type="submit" name="submit" value= "Submit" class="btn btn-primary btn-lg btn-block login-button">
                        </div>
                    </div>
                        </div>
                         </div>
                         
                    </form>
                </div>
            </div>
        </div>

</form>

    <table align="center" width="70%" height="5%" border="1" style="position: absolute; left: 280px; top:300px;">
     <tr style="background: #000;color:#fff;">
        <th>NO</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Edit</th>
    </tr>
<?php
    if(isset($_POST['submit']))
    {
        include('../dbcon.php');

        $rollno = $_POST['rollno']; 
        $name = $_POST['stuname'];


        $qry = "SELECT * FROM `student` WHERE `rollno` = '$rollno' AND `name` LIKE '%$name%'";
        $run = mysqli_query($con,$qry); 

        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else
        {
            $count =0;
            while($data = mysqli_fetch_assoc($run))
            {
                $count++;                
                ?>
                     <tr align="center" style="background: black; color: white;">
                        <td><?php echo $count; ?></td>
                        <td>
                            <img src="../imgdata/<?php echo $data['image']; ?>" style="max-width:100px;"/>
                        </td>
                        <td><?php echo $data['name'];?></td>
                        <td><?php echo $data['rollno'];?></td>
                        <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                    </tr>
                
                <?php
            }
        }
    }
?>

    </table>
