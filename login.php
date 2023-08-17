<?php
include('./navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="allcss.css" rel="stylesheet" type="text/css"/>
</head>
<body class="bdlogin">

        <span class="spslogin"> Loging </span>

    <div>
    <form action="script.php" method="post">
        <lable class=" lablogin"> Name </lable>
        <input type ="text" name="name"> <br> <br>
        <lable class="lablogin"> Password </lable>
        <input type ="password" name="password">  
</form>
</div>

        <a href ="addnew.php"><button class="bulogin"> Login </button> </a>

</body>
</html>



