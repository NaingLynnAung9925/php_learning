<?php require("create.php") ?>

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
<input type="hidden" name="id" value="<?php echo $id; ?>">
    <div>
        <label for="title">Title :</label>
        <input type="text" name="title" id="title" value="<?= $title; ?>">
    </div>
    <div>
        <label for="body">Body :</label>
        <input type="text" name="body" id="body" value="<?= $body; ?>" >
    </div>
    
	<button class="btn" type="submit" name="update">Update</button>
    
</form>
    
</body>
</html>