<?php include('./navbar.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet"  type="text/css">
</head>
<body bgcolor="gray" class="adbd">
    <div class="div1addnew">
        <span> Add Your Vehicle Details </span>
</div>
<div class="div2addnew">
    <form action="script.php" method="post" enctype="multipart/form-data">
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
        <input type="file" name="addimage" class="tx6addnew">
        <div class="divbuaddnew">
        <a href= "home.php"><input type="submit" name="addnew"  value="Submit" class="buaddnew"></a>
    </div>
</form>
</div>
</body>
</html>