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
</form>
</div>
<div class="divbu1login">
        <a href ="addnew.php" ><button class="bu1login" onclick="first1()"> Add </button> </a>
</div>
<div class="divbu2login">
        <a href ="update.php" ><button class="bu2login" onclick="first2()"> Update </button> </a>
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



