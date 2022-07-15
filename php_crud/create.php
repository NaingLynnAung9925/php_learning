<?php

session_start();
$server_name = "localhost";
$username = "root";
$password = "root";
$db_name = "php_crud";

$conn = new mysqli($server_name, $username, $password, $db_name);

if(isset($_POST['create'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    mysqli_query($conn, "INSERT INTO crud (title, body) VALUES ('$title','$body')");
    header("location:show.php");
}



if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM crud WHERE id=$id");
	header('location: show.php');
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $record = mysqli_query($conn, "SELECT * FROM crud where id=$id");
    if($record){
        $n = mysqli_fetch_array($record);
        $title = $n['title'];
        $body = $n['body'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $body = $_POST['body'];
    mysqli_query($conn, "UPDATE crud SET title='$title', body='$body' WHERE id=$id");
    $_SESSION['message'] = "Your post have been updated";
    header("location:show.php");
}