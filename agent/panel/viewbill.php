<?php
include('header.php');
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

$agent_email = $_SESSION['useremail'];

$fetch = "SELECT * FROM `add` WHERE email ='$agent_email'";
$query=mysqli_query($connection , $fetch);
if(mysqli_num_rows($query) > 0){
   while ($row = mysqli_fetch_assoc($query)) {
  $row1 = $row['aid']; 
  $row2 = $row['city']; 
  $company = $row['company']; 
}
}

$fetch = "SELECT * from `bill` as b  INNER JOIN `form` as f on b.fid = f.fid  INNER JOIN `add` as a on a.aid = b.aid where f.`scompany`='$company' AND f.`city` ='$row2' order by `id` desc";

$query = mysqli_query($connection, $fetch);
   
    ?>
<div class="col-xl-10 col-lg-12 col-md-9">
                <h2 class="text-dark">Bill Reports</h2>
                <hr>
            <table class="table table-warning display-nowrap" id="example">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 85%;">

          <tr>
           
            <th>Code</th>
            <th>Sender Detail</th>
            <th>Receiver Detail </th>
            <th>Payment </th>
            <th>Delivery Date</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($pro_data = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
              <td>
                <?php echo $pro_data['id'] ?>
              </td>
              <td>
              <b>Sender Company</b> (
                <?php echo $pro_data['scompany'] ?>)
                 <br> <b>Sender Name</b>(
                <?php echo $pro_data['fname'] ?>)
                 <br> <b>Sender Email</b>(
                <?php echo $pro_data['femail'] ?>)
                <br> <b>Sender Residential Address</b>(
                <?php echo $pro_data['raddress'] ?>)
                <br> <b>Sender Shipment Address</b>(
                <?php echo $pro_data['saddress'] ?>)
                <br> <b>Sender Phone</b>(
                <?php echo $pro_data['phone'] ?>)
                <br> <b>Sender city</b>(
                <?php echo $pro_data['city'] ?>)
                 <br> <b>Sender Courier Type</b>(
                <?php echo $pro_data['ctype'] ?>)
                <br> <b>Sender Courier Weight</b>(
                <?php echo $pro_data['weight'] ?>)
                <br> <b>Sender Gender</b>(
                <?php echo $pro_data['gender'] ?>)
              </td>
              <td>
              <b>Agent Company</b> (
                <?php echo $pro_data['company'] ?>)
                <br><b>Agent Name</b> (
                <?php echo $pro_data['name'] ?>)

              <br> <b>Agent Email</b>(
              <?php echo $pro_data['email'] ?>)

                <br> <b>Agent City</b>(
                <?php echo $pro_data['city'] ?>)
               
                <br> <b>Agent Phone</b>(
                <?php echo $pro_data['phone'] ?>)
                
              </td>
              <td>
                <?php echo $pro_data['price'] ?>
              </td>

              <td>
                <?php echo $pro_data['bdate'] ?>
              </td>
              <td ><a href="bupdatedata.php?id=<?php echo $pro_data ['id'] ?>" class="btn btn-success">Update</a></td>
              <td ><a href="bdelete.php?id=<?php echo $pro_data ['id']?>" class="btn btn-danger">Delete</a></td>
                    
            </tr>
            <?php
          
        }
          ?>
        </tbody>
      </table>
     
    </div>
  </div>
</div>

</body>

</html>

<?php
include('admin/includes/footer.php');
?>
