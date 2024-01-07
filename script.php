<?php
include('./dbconnection.php');
session_start();
if(isset ($_POST['add'])){
    
    $n = mysqli_real_escape_string ($con,$_POST['name']);
    $pw = mysqli_real_escape_string ($con,$_POST['password']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
   

    $sql =  "SELECT * FROM user WHERE name='$n' AND password='$pw' AND nic='$nic'";
    if( mysqli_query ($con,$sql)){
        $_session ['user']=$un;
        header ('location:addnew.php');

    }
    
}
if(isset ($_POST['update'])){
    
    $n = mysqli_real_escape_string ($con,$_POST['name']);
    $pw = mysqli_real_escape_string ($con,$_POST['password']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
   

    $sql =  "SELECT * FROM user WHERE name='$n' AND password='$pw' AND nic='$nic'";
    if(mysqli_query ($con,$sql)){
        $_session ['user']=$un;
        header ('location:update.php');
    }
    else{
        echo "create add first";
    }
    
}
if(isset ($_POST['you'])){
    
    $n = mysqli_real_escape_string ($con,$_POST['name']);
    $pw = mysqli_real_escape_string ($con,$_POST['password']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
   

    $sql =  "SELECT * FROM user WHERE name='$n' AND password='$pw' AND nic='$nic'";
    if(mysqli_query ($con,$sql)){
        $_session ['user']=$un;
        header ('location:you.php');
}
}

if(isset ($_POST['addnew'])){
    $co = mysqli_real_escape_string ($con,$_POST['contact']);
    $pri = mysqli_real_escape_string ($con,$_POST['price']);
    $loca = mysqli_real_escape_string ($con,$_POST['location']);
    $type = mysqli_real_escape_string ($con,$_POST['type']);
    $name = mysqli_real_escape_string ($con,$_POST['name']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
    $mila = mysqli_real_escape_string ($con,$_POST['milage']);
    $addima = mysqli_real_escape_string ($con,$_POST['image']);

    $sql = "INSERT INTO vehicle_details(contact,price,location,type,name,nic,milage,addimage) VALUES('$co','$pri','$loca','$type','$name','$nic','$mila','$addima')";
    if(mysqli_query ($con,$sql)){
        header ('location:home.php');
        
    }
    
    
}

if(isset ($_POST['upload'])){
    $co = mysqli_real_escape_string ($con,$_POST['contact']);
    $pri = mysqli_real_escape_string ($con,$_POST['price']);
    $loca = mysqli_real_escape_string ($con,$_POST['location']);
    $type = mysqli_real_escape_string ($con,$_POST['type']);
    $name = mysqli_real_escape_string ($con,$_POST['name']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
    $mila = mysqli_real_escape_string ($con,$_POST['milage']);
    $addima = mysqli_real_escape_string ($con,$_POST['image']);

    $sql = "UPDATE vehicle_details SET (contact ='$co',price ='$pri',location ='$loca',type ='$type',name ='$name',nic ='$nic',milage ='$mila',image ='$addima'";
    $res = mysqli_query ($con,$sql);
    
    if(mysqli_num_rows ($res)>0){

        $_session ['user']=$un;
        header ('location:home.php');
    }
    else{
        echo "failed to update vehicle details";
    }
}


if(isset ($_POST['singup'])){
    $nm = mysqli_real_escape_string ($con,$_POST['name']);
    $psw = mysqli_real_escape_string ($con,$_POST['password']);
    $tel = mysqli_real_escape_string ($con,$_POST['telephone']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
    $c = mysqli_real_escape_string ($con,$_POST['city']);

    $sql = "INSERT INTO user (name,password, telephone,nic,city) VALUES ('$nm','$psw','$tel','$nic','$c')";
    if(mysqli_query ($con,$sql)){
        $_session ['user']=$un;
        header ('location:addnew.php');
    }  
}
?>








