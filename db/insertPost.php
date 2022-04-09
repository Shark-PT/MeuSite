<?php 
session_start();
if (!isset($_SESSION['username']) || empty($_SESSION['username']))
    header('Location:../index.php');

if(!isset($_POST['form-title']) || !isset($_POST['form-description']))
    header('Location:../admin/index.php');

include('conn.php');
$title=$_POST['form-title'];
$description=$_POST['form-description'];
$id_user=$_SESSION['username'];

$sql = "INSERT INTO posts (title, description, date_time, id_user) 
        VALUES ('$title','$description', NOW(), '$id_user')";

if ($conn->query($sql) === TRUE) {
    header('Location:../admin/index.php?res=insertOK');
} else {
    header('Location:../admin/index.php?res=insertErro');
}

$conn->close();
?>