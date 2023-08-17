<?php
include('./navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="script.php" method="post">
        <lable> Name </lable>
        <input type ="text" name="name"> 
        <lable> Password </lable>
        <input type ="password" name="password">  
</form>
</div>

        <a href ="addnew.php"><button> Login </button> </a>

</body>
</html>



