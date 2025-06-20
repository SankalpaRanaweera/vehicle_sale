<?php include('./navbar.php'); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="gray" class="lbd">
<div class="logindiv1">
        <span> Login </span>
</div>

    <div class="logindiv2">
    <form action="script.php" method="post">
        <lable> Name </lable>
        <input type ="text" name="name" class="tx1login"> <br>
        <lable> Password </lable>
        <input type ="password" name="password" class="tx2login"> <br>
        <lable>NIC</lable>
        <input type ="text" name="nic" class="tx3login">  
        <?
        
    $_SESSION['user']= $nic; 
    ?>
</div>

<div class="divbu1login">
        <input type="submit" name="add" value="Add" class="bu1login"> 
</div>
<div class="divbu2login">
        <input type="submit" name="update" value="Update" class="bu2login"> 
</div>

<div class="divbu2login">
        <input type="submit" name="you" value="You" class="bu2login">
</div>
</form>
</body>
</html>



