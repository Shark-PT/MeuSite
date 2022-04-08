<?php 
/*if (!isset($_SESSION['username']) || empty($_SESSION['username']))
    header('Location:../index.php');
*/
if(!isset($_GET['id']))
    header('Location:../admin/index.php');

include('conn.php');
$id=$_GET['id'];

$sql = "DELETE FROM posts WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location:../admin/index.php?res=removeOK');
} else {
    header('Location:../admin/index.php?res=removeErro');
}

$conn->close();
?>