<?php
    include('../dbcon.php');

    $qry = "SELECT * FROM `enquiry`";
    $run = mysqli_query($con,$qry);
 
?>


<div class="container" style="position: absolute;left: 335px;width: 50%; background: black; color:white;">
  <div class="title">
    <h1 style="position: absolute top: -117px;">Enquiry Details</h1>
  </div>
  <div class="row">
    <div class="col-md-10">
      <table class="table">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Phone no</th>
      <th scope="col">Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
    while($data = mysqli_fetch_assoc($run))
    {
      ?>
          <tr>
            <td><?php echo $data['id'];?></td>
            <td><?php echo $data['fname'];?></td>
            <td><?php echo $data['emailid'];?></td>
            <td><?php echo $data['phoneno'];?></td>
            <td><?php echo $data['cmessage'];?></td>
          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</div>