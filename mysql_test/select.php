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
    $serverName = 'localhost';
    $userName = 'root';
    $password = 'root';
    $db_name = 'php_crud';

    $conn = new mysqli($serverName, $userName, $password, $db_name);
    if($conn->connect_error){
        die("Connection Failed :". $conn->connect_error);
    }

    $sql = "SELECT * FROM mysql_test";
    
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "<table> 
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>
                <td>" . $row["id"]."</td>
                <td>" . $row["FirstName"]. " " . $row["LastName"]. "</td>
            </tr>";
        }
        echo "</table>";
    }else{
        echo "O results";
    }

    ?>


    
</body>
</html>