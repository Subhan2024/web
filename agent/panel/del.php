<?php
require('config.php');

$user_id = $_GET['fid']; 

$del = "update `form` set status = 'deliver' where fid = '$user_id'";

$rest = mysqli_query($connection , $del);

if (!$rest) {
     die("connection failed");
}

header('location: deliver.php');
?>