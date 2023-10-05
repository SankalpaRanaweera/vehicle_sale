<?php
include('./dbconnection.php');
$id=$_GET['id'];
$sql = "DELETE FROM vehicle_details WHERE id='$id'";
$res = mysqli_query($con,$sql);
if($res) {
    header ('location:home.php');
}
else{
    echo"failed to delete details";
}
?>