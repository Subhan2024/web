<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

if(isset($_POST['bill'])){
    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $price = $_POST['price'];
    $date = $_POST['date'];

        $insert = "INSERT INTO `bill` (`fid`,`aid`,`price`,`bdate`) VALUES ('$sname', '$rname', '$price' ,'$date')";
        $connect_insert = mysqli_query($connection, $insert);
        if($connect_insert){
            echo "<script> alert('Bill Created'); </script>";
        }else{
            echo "<script> alert('Bill not Create'); </script>";
        }
    }



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customstyle.css">

</head> 
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
</body>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Create Bill</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0 mt-4 ml-2">
                <?php
                $product = "SELECT * from `form`";
                $result1 = mysqli_query($connection, $product);
                if(mysqli_num_rows($result1) > 0) {
                ?>
                <select class="form-select" name="sname" aria-label="Default select example">
                    <option selected>Select Company or Sender Name or city</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result1)){
                    ?>
                    <option value="<?php echo $row['fid']?>"><?php echo  $row['scompany']?> <?php echo  $row['fname']?> <?php echo  $row['city']?></option>
                    <?php
                    }  
                    }                
                    ?>
                </select>
                </div>
            
                
                <div class="col-sm-12 mb-3 mb-sm-0 mt-4 ml-2">
                <?php
                $product = "SELECT * from `add`";
                $result1 = mysqli_query($connection, $product);
                if(mysqli_num_rows($result1) > 0) {
                ?>
                <select class="form-select" name="rname" aria-label="Default select example">
                    <option selected>Select Agent Name Or Company or City</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result1)){
                    ?>
                    <option value="<?php echo $row['aid']?>"><?php echo  $row['name']?> <?php echo  $row['company']?> <?php echo  $row['city']?></option>
                    <?php
                    }  
                    }                
                    ?>
                </select>
                </div>
                                
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="number" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Price" name="price" required>
                </div>
                
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="date" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="date" name="date" required>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="submit" class="btn btn-primary"
                    name="bill">
                </div>
            <!-- <button type="submit" class="btn btn-primary btn-block " name="bill">Create bill</button>    
            
            <input type="submit" class="btn btn-primary  btn-block" name="bill" >
            <hr> -->
            <!-- <a href="login.php" class="btn btn-google btn-user btn-block">
               </i>Already have an Acount?Login Here
            </a> -->
                                
        </form>

            </div>

            </div>
        </div>

    </div>
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/tcs.png" alt="">
                        </div>
                        <h4 class="mb-3">TCS Courier Service</h4>
                        <button class="btn btn-success">Price 1200pkr</button>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/lepo.png" alt="">
                        </div>
                        <h4 class="mb-3">Leopard Courier Service</h4>
                        <button class="btn btn-success">Price 900pkr</button>
                        <br>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/trax.png" alt="">
                        </div>
                        <h4 class="mb-3">Trax Courier service</h4>
                        <button class="btn btn-success">Price 700pkr</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<?php
include('admin/includes/footer.php');


?>