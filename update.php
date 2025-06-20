<?php include('./navbar.php');
    session_start();
    $nic=$_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css"> 
</head>
<body bgcolor="gray" class="updatebd">
    <div class="div1addnew">
        <span> Update Your Vehicle Details </span>
</div>
<div class="div2addnew">
    <form action="script.php" method="post" enctype="multipart/form-data">
        <?php
        
        $sql="SELECT * FROM vehicle_details WHERE nic='$nic' ";
        $res = mysqli_query ($con,$sql);
        if(mysqli_num_rows($res)>0){
            $row=mysqli_fetch_assoc($res);   
        ?>
        <lable> Contact</lable>
        <input type="text" name="contact" class="tx0addnew" value=<?php echo $row['contact'] ?> ><br>
        <lable> Price</lable>
        <input type="text" name="price" class="tx1addnew" value=<?php echo $row['price'] ?> ><br>
        <lable> Location</lable>
        <input type="text" name="location" class="tx2addnew" value=<?php echo $row['location'] ?> ><br>
        <lable>Type</lable>
        <input type="text" name="type" class="tx3addnew" value=<?php echo $row['type'] ?> ><br>
        <lable>Name</lable>
        <input type="text" name="name" class="tx4addnew" value=<?php echo $row['name'] ?> ><br>
        <lable>NIC</lable>
        <input type="text" name="nic" class="tx7addnew" value=<?php echo $row['nic'] ?> ><br>
        <lable>Milage</lable>
        <input type="text" name="milage" class="tx5addnew" value=<?php echo $row['milage'] ?> ><br>
        <lable>Add Image</lable>
        <input type="file" name="addimage" class="tx6addnew" value=<?php echo $_FILES['addimage'] ?> >
        <div class="divbuaddnew">
        <input type="submit" name="upload" class="buaddnew" >
    </div>

    <?php
        }
        ?>
</form>
</div>
    
</body>
</html>