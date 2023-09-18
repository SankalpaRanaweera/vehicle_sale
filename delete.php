<?php
include('./dbconnection.php');
$user=$_GET['user'];
$sql = "DELETE FROM vehicle_details WHERE NIC='$nic'";
$res = mysqli_query($con,$sql);
if($res) {
    header ('location:home.php');
}
else{
    echo"failed to delete details";
}
?>