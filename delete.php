<?php
include('./dbconnection.php');
$nic=$_GET['NIC'];
$sql = "DELETE FROM vehicle_details WHERE NIC='$nic'";
$res = mysqli_query($con,$sql);
if($res) {
    header ('location:home.php');
}
else{
    echo"failed to delete details";
}
?>