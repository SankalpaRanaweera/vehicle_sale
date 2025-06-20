<?php
include('./dbconnection.php');
session_start();
if(isset ($_POST['add'])){
    
    $n = mysqli_real_escape_string ($con,$_POST['name']);
    $pw = mysqli_real_escape_string ($con,$_POST['password']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
   

    $sql =  "SELECT * FROM user WHERE name='$n' AND password='$pw' AND nic='$nic'";
    if( mysqli_query ($con,$sql)){
        $_SESSION ['user']=$nic;
        header ('location:addnew.php');

    }
    
}
if(isset ($_POST['update'])){
    
    $n = mysqli_real_escape_string ($con,$_POST['name']);
    $pw = mysqli_real_escape_string ($con,$_POST['password']);
    $nic = mysqli_real_escape_string ($con,$_POST['nic']);
   

    $sql = "SELECT * FROM user WHERE name='$n' AND password='$pw' AND nic='$nic'";
    if(mysqli_query ($con,$sql)){
        $_SESSION ['user']=$nic;
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
   

    $sql = "SELECT * FROM user WHERE name='$n' AND password='$pw' AND nic='$nic'";
    $res = mysqli_query($con, $sql);

    if ($res && mysqli_num_rows($res) > 0) {
        $_SESSION['user'] = $nic;
        header('location:you.php');
        exit(); 
    } else {
        echo "<script>alert('Invalid login. Please check your name, password, or NIC.');</script>";
    }
}


if(isset($_POST['addnew'])) {
    $co = mysqli_real_escape_string($con, $_POST['contact']);
    $pri = mysqli_real_escape_string($con, $_POST['price']);
    $loca = mysqli_real_escape_string($con, $_POST['location']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $nic = mysqli_real_escape_string($con, $_POST['nic']);
    $mila = mysqli_real_escape_string($con, $_POST['milage']);
    
    if(isset($_FILES['addimage']) && $_FILES['addimage']['error'] == 0) {
        $img_name = time() . '_' . basename($_FILES['addimage']['name']);
        $tmp_name = $_FILES['addimage']['tmp_name'];
        $upload_dir = 'uploads/'; 
        $upload_path = $upload_dir . $img_name;

        if(move_uploaded_file($tmp_name, $upload_path)) {
            
            $sql = "INSERT INTO vehicle_details(contact,price,location,type,name,nic,milage,addimage) 
                    VALUES('$co','$pri','$loca','$type','$name','$nic','$mila','$upload_path')";
            if(mysqli_query($con, $sql)) {
                header('Location: home.php'); 
                exit();
            } else {
                echo "Database insert failed: " . mysqli_error($con);
            }
        } else {
            echo "Failed to upload image file.";
        }
    } else {
        echo "No image uploaded or upload error.";
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
    //$addima = mysqli_real_escape_string ($con,$_FILES['image']);
    if (isset($_FILES['addimage']) && $_FILES['addimage']['error'] == 0) {
        $image_name = time() . '_' . basename($_FILES['addimage']['name']); 
        $image_tmp = $_FILES['addimage']['tmp_name'];
         $upload_dir = 'uploads/';
        $image_path = $upload_dir . $image_name;

        move_uploaded_file($image_tmp, $image_path);
    } else {
        $image_path = ''; 
    }




    $sql = "UPDATE vehicle_details SET contact ='$co',price ='$pri',location ='$loca',type ='$type',name ='$name',nic ='$nic',milage ='$mila'";
    if (!empty($image_path)) {
        $sql .= ", addimage='$image_path'";
    }

    $sql .= " WHERE nic='$nic'";
    $res = mysqli_query ($con, $sql);
    
    if($res){

        $_SESSION ['user'] = $nic;
        header ('location: home.php');
        exit();
    }
    else{
        echo "failed to update vehicle details" . mysqli_error($con);
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
        //$_SESSION ['user']=$nic;
        header ('location:addnew.php');
    }  
}
?>








