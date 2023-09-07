<?php include('./navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="gray">
    <div class ="div1singup">
    <span> Sing Up </span>
</div>
<div class="div2singup">
    <from action="script.php" method="post">
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
</div>
<div class="divbusingup">
        <a href ="addnew.php"><input type="submit" name="singup" value="Register" onclick="second()" class="busingup"> </a>
</div>
</form>
<script>
    function second(){
        alert(" Registration succesfull! Now you can add your vehicle details")
    }
        </script>
    
</body>
</html>