<?php
require("config.php");

$user_id = $_GET['id']; 

$query = "select * from `bill` where id = '{$user_id}'";

$retl = mysqli_query($connection , $query);
if(!$retl){
    die("query fail");
}

if (mysqli_num_rows($retl) > 0 ) {
     while($row = mysqli_fetch_assoc($retl)) {
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Update Bill</h2>
                <hr>
        <form class="user" action="bupdate.php" method="POST">
        <div class="col-md-0">
    <label for="" class="form-label"></label>
    <input type="hidden"  name="id" class="form-control" value="<?php echo $row['id']?>">
  </div>
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
                     placeholder="Price" name="price" required value="<?php echo $row['price']?>">
                </div>
                
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="date" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="date" name="date" required value="<?php echo $row['date']?>">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="submit" class="btn btn-primary"
                    name="bill">
                </div>
                                
        </form>
        <?php
     }
    }
        ?>

            </div>

            </div>
        </div>

    </div>


</body>

</html>