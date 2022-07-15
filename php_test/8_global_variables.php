<?php

$x = 5;
$y = 5;
function sum(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

sum();
echo $z;
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
   <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="fname">
        <input type="submit" value="submit">
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
           $name = $_REQUEST['fname'];
           if (empty($name)) {
                echo "Name is empty";
           }else{
            echo "Name is $name";
           }
        }

    ?>
</body>
</html>