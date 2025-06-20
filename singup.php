<?php include('./navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="gray" class="sbd">
    <div class ="div1singup">
    <span> Sing Up </span>
</div>
<div class="div2singup">
    <form action="script.php" method="post">
        <lable> Name </lable>
        <input type="text" name="name" class="tx1singup"><br>
        <lable> Password</lable>
        <input type="password" name="password" class="tx2singup"><br>
        <lable>Telephone</lable>
        <input type="text" name="telephone" class="tx3singup"><br>
        <lable>NIC</lable>
        <input type="text" name="nic" class="tx4singup"><br>
        <lable>City</lable>
        <input type="text" name="city" class="tx5singup">

<div class="divbusingup">
        <input type="submit" name="singup" value="Register" class="busingup"> 
</div>
</div>
</form>
</body>
</html>