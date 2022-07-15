<?php
session_start();
$conn = new mysqli("localhost","root","root","php_crud");
if($conn->connect_error){
    echo "Connection Failed :". $conn->connect_error;
}


if(isset($_POST['create'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $sql = "INSERT INTO mysql_test (firstname, lastname, age) VALUES ('$firstname','$lastname','$age') ";
    if($conn->query($sql)){
        echo "New Record create successfully";
        header("location:show.php");
    }
}

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = "DELETE FROM mysql_test WHERE id=$id";
    if($conn->query($sql)){
        echo "Delete Successfully";
        header("location:show.php");
    }
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT * FROM mysql_test WHERE id=$id";
    $record = $conn->query($sql);
    if($record){
        $new = $record->fetch_assoc();
        $firstname = $new['firstname'];
        $lastname = $new['lastname'];
        $age = $new['age'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $sql = "UPDATE mysql_test SET firstname='$firstname', lastname='$lastname', age=$age where id=$id" ;
     if($conn->query($sql)){
        echo "Record updated successfully";
    }else {
        echo "Error Updating record :". $conn->error;
    }
}