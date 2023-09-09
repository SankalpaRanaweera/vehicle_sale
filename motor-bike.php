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
<div class="divfirst" >
<div class="div1moter">
        <?php
        $sql= "SELECT from * vehicle_details";
        $res = mysqli_query($con,$sql);
        if(mysqli_num_rows($res)>0){
            while($span=mysqli_fetch_assoc($res)){
        <div class="diva">
        <div> <img src="a.png " alter="a" class="img" > </div>
        echo <div> <span> Contact </span> <strong> : </strong> "<span>".$span['contact']. "</span>";</div>
        echo<div> <span> Price</span><strong> : </strong> "<span>".$span['price']. "</span>";</div>
        echo<div> <span> Location </span><strong> : </strong>"<span>".$span['location']."</span>";</div>
        echo<div> <span> Type</span><strong> : </strong> "<span>".$span['type']."</span>";</div>
        echo<div><span> Name </span><strong> : </strong>"<span>".$span['name']."</span>";</div>
        echo<div><span> Milage </span><strong> : </strong>"<span>".$span['milage']."</span>";</div>
    </div> </div> }}?>
</div>             
</body>
</html>