<?php
include('./dbconnection.php');
session_start();
if(isset ($_POST['login'])){
    $n = mysqli_real_escape_string ($con,$_POST['Name']);
    $pw = mysqli_real_escape_string ($con,$_POST['Password']);
    $nic = mysqli_real_escape_string ($con,$_POST['NIC']);

    $sql = "SELECT * FROM user WHERE username='$n' AND password='$pw' AND nic='$nic'";
    $res = mysqli_query ($con,$sql);
    
    if(mysqli_num_rows ($res)>0){

        $_session ['user']=$n;
        header ('location:home.php');
    }
    else{
        echo "failed to loging";
    }
}



if(isset ($_POST['addnew'])){
    $con = mysqli_real_escape_string ($con,$_POST['Contact']);
    $pri = mysqli_real_escape_string ($con,$_POST['Price']);
    $loca = mysqli_real_escape_string ($con,$_POST['Location']);
    $yom = mysqli_real_escape_string ($con,$_POST['YOM']);
    $name = mysqli_real_escape_string ($con,$_POST['Name']);
    $nic = mysqli_real_escape_string ($con,$_POST['NIC']);
    $mila = mysqli_real_escape_string ($con,$_POST['Milage']);
    $addima = mysqli_real_escape_string ($con,$_POST['AddImage']);

    $sql = "INSERT INTO vehicle_details (Contact,Price,Location,YOM,Name,NIC,Milage,AddImage) VALUES ('$con',$pri','$loca','$yom','$name','$nic','$mila','$addima')";
    $res = mysqli_query ($con,$sql);
    
    if(mysqli_num_rows ($res)>0){

        $_session ['user']=$un;
        header ('location:home.php');
    }
    else{
        echo "failed to add vehicle details";
    }
}

if(isset ($_POST['Update'])){
    $con = mysqli_real_escape_string ($con,$_POST['Contact']);
    $pri = mysqli_real_escape_string ($con,$_POST['Price']);
    $loca = mysqli_real_escape_string ($con,$_POST['Location']);
    $yom = mysqli_real_escape_string ($con,$_POST['YOM']);
    $name = mysqli_real_escape_string ($con,$_POST['Name']);
    $nic = mysqli_real_escape_string ($con,$_POST['NIC']);
    $mila = mysqli_real_escape_string ($con,$_POST['Milage']);
    $addima = mysqli_real_escape_string ($con,$_POST['AddImage']);

    $sql = "UPDATE vehicle_details SET (Contact ='$con',Price ='$pri',Location ='$loca',YOM ='$yom',Name ='$name',NIC ='$nic',Milage ='$mila',AddImage ='$addima'";
    $res = mysqli_query ($con,$sql);
    
    if(mysqli_num_rows ($res)>0){

        $_session ['user']=$un;
        header ('location:home.php');
    }
    else{
        echo "failed to update vehicle details";
    }
}

if(isset ($_POST['log'])){
    $n = mysqli_real_escape_string ($con,$_POST['Name']);
    $pw = mysqli_real_escape_string ($con,$_POST['Password']);
    $nic = mysqli_real_escape_string ($con,$_POST['NIC']);
   

    $sql = "INSERT INTO user (Name,Password,NIC) VALUES ('$n','$pw','$nic')";
    $res = mysqli_query ($con,$sql);
    
    if(mysqli_num_rows ($res)>0){

        $_session ['user']=$un;
        header ('location:home.php');
    }
    else{
        echo "failed to login";
    }
}
if(isset ($_POST['singup'])){
    $nm = mysqli_real_escape_string ($con,$_POST['Name']);
    $psw = mysqli_real_escape_string ($con,$_POST['Password']);
    $tel = mysqli_real_escape_string ($con,$_POST['Telephone']);
    $nic = mysqli_real_escape_string ($con,$_POST['NIC']);
    $c = mysqli_real_escape_string ($con,$_POST['City']);

    $sql = "INSERT INTO user (Name,Password, Telephone,NIC) VALUES ('$n','$pw','$tel','$nic','$c')";
    $res = mysqli_query ($con,$sql);
    
    if(mysqli_num_rows ($res)>0){

        $_session ['user']=$un;
        header ('location:home.php');
    }
    else{
        echo "failed to singup";
    }
}
?>








