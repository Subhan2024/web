<?php
include('config.php');

$user_id = $_GET['aid']; 

$query = "select * from `add` where aid = '{$user_id}'";

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
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Update Agent</h2>
                <hr>
        <form class="user" action="aupdate.php" method="POST">
        <div class="form-group row">
        <div class="col-md-0">
    <label for="" class="form-label"></label>
    <input type="hidden"  name="id" class="form-control"  value="<?php echo $row['aid']?>">
  </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Company name" name="company" required value="<?php echo $row['company']?>">
                </div>
                <div class="col-sm-6">
                    <input type="name" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="name" name="name" required value="<?php echo $row['name']?>">
                </div>
            </div>
            <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                        id="exampleEmail" placeholder="email" name="email" required value="<?php echo $row['email']?>">
                </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="password" name="password" required value="<?php echo $row['password']?>">
                </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="phone" name="phone" required value="<?php echo $row['phone']?>"
                </div>
                <div class="col-sm-6">
                    <input type="city" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="city" name="city" required value="<?php echo $row['city']?>">
                </div>
            </div>
            
            <input type="submit" class="btn btn-primary btn-user btn-block" name="register" >
            <hr>
        </form>
        <?php
}
}
        ?>

            </div>

        </div>

    </div>


</body>

</html>