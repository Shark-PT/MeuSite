<?php
 
include('conn.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = mysqli_real_escape_string($conn,$_POST['form-username']);
    $password = mysqli_real_escape_string($conn,$_POST['form-password']);
    $password = md5($password); 
    
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result(); // get the mysqli result
    if ($result->num_rows == 1) {
        $_SESSION['username']=$username;
        $sql = "UPDATE users SET last_login=NOW() WHERE username='$username'";
        $conn->query($sql);
    }
    header('Location: ../admin/index.php');
}
mysqli_close($conn);
?>