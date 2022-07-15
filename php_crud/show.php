<?php require("create.php") ?>
<?php  $results = mysqli_query($conn, "SELECT * FROM crud"); ?>

 <table>
 <thead>
     <tr>
        <th>ID</th>
         <th>Title</th>
         <th>Body</th>
         <th colspan="2">Action</th>
     </tr>
 </thead>
 
 <?php while ($row = mysqli_fetch_array($results)) { ?>
     <tr>
        <td><?= $row['id']; ?></td>
         <td><?= $row['title']; ?></td>
         <td><?= $row['body']; ?></td>
         <td>
             <a href="update.php?edit=<?= $row['id']; ?>" >Edit</a>
         </td>
         <td>
             <a href="show.php?del=<?= $row['id']; ?>" >Delete</a>
         </td>
     </tr>
 <?php } ?>
</table>
