<?php
    include('../dbcon.php');

    $qry = "SELECT * FROM `student`";
    $run = mysqli_query($con,$qry);
 
?>


<div class="container" style="width:auto; position: absolute;left: 262px;top: 130px;background: black; color: white;">
  <div class="title">
    <h1 style="position: absolute top: -117px;">Student Details</h1>
  </div>
  <div class="row">
    <div class="col-md-10">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">image</th> 
      <th scope="col">Rollno</th>
      <th scope="col">Name</th>
      <th scope="col">address</th>
      <th scope="col">Phone no</th>
      <th scope="col">Email ID</th>
      <th scope="col">Semester</th>
      <th scope="col">view</th>
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
    while($data = mysqli_fetch_assoc($run))
    {
      ?>
          <tr>
             <td><img src="../imgdata/<?php echo $data['image']; ?>" style="max-width:100px;"/></td> 
             <td><?php echo $data['rollno'];?></td>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['address'];?></td>
            <td><?php echo $data['phoneno'];?></td>
            <td><?php echo $data['emailid'];?></td>
            <td><?php echo $data['semster'];?></td>
            <td><a href="#">View</a></td>
          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>