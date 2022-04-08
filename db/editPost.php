<?php 
/*if (!isset($_SESSION['username']) || empty($_SESSION['username']))
    header('Location:../index.php');
*/
if(!isset($_GET['post-id']) || !isset($_GET['post-title']) || !isset($_GET['post-description']) || !isset($_GET['post-date']) || !isset($_GET['post-user']))
    header('Location:../admin/index.php');

include('conn.php');
$id=$_GET['post-id'];
$title=$_GET['post-title'];
$description=$_GET['post-description'];
$date=$_GET['post-date'];
$user=$_GET['post-user'];

$sql = "UPDATE posts SET title='$title',description='$description',date_time='$date',id_user='$user' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../admin/index.php?res=editOK');
} else {
    header('Location:../admin/index.php?res=editErro');
}

$conn->close();
?>