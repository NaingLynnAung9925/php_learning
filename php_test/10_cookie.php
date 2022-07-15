<?php

        #name   #value   #expire
setcookie("user","", time()-3600);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     if(isset($_COOKIE["user"])){
     echo "Welcome ". $_COOKIE["user"];
     }else{
     echo "Welcome Guest";
     }
   ?>
</body>
</html>