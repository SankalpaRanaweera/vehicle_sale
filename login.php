<?php include('./navbar.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css"/>
</head>
<body bgcolor="gray">
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
        session_start();
    $_SESSION['user']= nic; 
    ?>
</div>

<div class="divbu1login">
        <a href ="addnew.php" ><input type="submit" name="add" value="Add" onclick="first2()" class="bu1login"> </a>
</div>
<div class="divbu2login">
        <a href ="update.php" ><input type="submit" name="update" value="Update" onclick="first1()" class="bu2login"> </a>
</div>
</form>
<div class="divbu2login">
        <a href ="you.php" ><input type="submit" name="you" value="You" class="bu2login"> </a>
</div>


<script>
    function first1(){
        alert("login succesfull! add your vehicle details");
    }
    function first2(){
        alert ("login succesfull! update your vehicle details");
    }
    </script>

</body>
</html>



