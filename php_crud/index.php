<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form action="show.php" method="POST">
    <div>
        <label for="title">Title :</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="body">Body :</label>
        <input type="text" name="body" id="body" >
    </div>
    <button type="submit" name = "create">Create</button>
</form>
    
</body>
</html>