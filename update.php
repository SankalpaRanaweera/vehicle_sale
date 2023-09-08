<?php include('./navbar.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css"> 
</head>
<body bgcolor="gray">
    <div class="div1addnew">
        <span> Update Your Vehicle Details </span>
</div>
<div class="div2addnew">
    <form action="script.php" method="post">
        <?php
        $nic =$_GET['NIC'];
        $sql="SELECT * FROM vehicle_details WHERE $nic='nic' ";
        $res = mysqli_query ($con,$sql);
        if(mysqlo_num_rows($res)>0){
            $row=mysqli_fetch_assoc($res);
            ?>
        <lable> Contact</lable>
        <input type="text" name="contact" class="tx0addnew"><br>
        <lable> Price</lable>
        <input type="text" name="price" class="tx1addnew"><br>
        <lable> Location</lable>
        <input type="text" name="location" class="tx2addnew"><br>
        <lable>Type</lable>
        <input type="text" name="type" class="tx3addnew"><br>
        <lable>Name</lable>
        <input type="text" name="name" class="tx4addnew"><br>
        <lable>NIC</lable>
        <input type="text" name="nic" class="tx7addnew"><br>
        <lable>Milage</lable>
        <input type="text" name="milage" class="tx5addnew"><br>
        <lable>Add Image</lable>
        <input type="file" name="image" class="tx6addnew">
        <div class="divbuaddnew">
        <input type="submit" name="upload" class="buaddnew">
    </div>
    <?php
        }
        ?>
</form>
</div>
    
</body>
</html>