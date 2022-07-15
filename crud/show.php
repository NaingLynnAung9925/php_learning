<?php require("create.php"); ?>
<?php 
    $sql = "SELECT * FROM mysql_test";
     $results = $conn->query($sql);
     
?>

<table>
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Age</th>
        <th>Action</th>
    </tr>

    <?php while($row = $results->fetch_assoc()){

        ?>

    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row["firstname"]; ?></td>
        <td><?= $row['lastname']; ?></td>
        <td><?= $row['age']; ?></td>
        <td>
            <a href="update.php?edit=<?= $row['id']?>">Edit</a>
        </td>
        <td>
            <a href="show.php?del=<?= $row['id'] ?>">Delete</a>
        </td>
    </tr>
    <?php }?>
</table>