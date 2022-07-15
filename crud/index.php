<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="post">
        <div>   
            <label for="firstname">FirstName</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="lastname">LastName</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <input type="submit" value="create" name="create">
    </form>
</body>
</html>