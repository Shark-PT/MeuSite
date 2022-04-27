<?php
 
include('conn.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = mysqli_real_escape_string($conn,$_POST['form-username']);
    $password = mysqli_real_escape_string($conn,$_POST['form-password']);
    $password = md5($password); 
    
    $sql = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username']=$username;
        $sql = "UPDATE users SET last_login=NOW() WHERE username='$username'";
        $conn->query($sql);
    }
    header('Location: ../admin/index.php');
}
mysqli_close($conn);
?>