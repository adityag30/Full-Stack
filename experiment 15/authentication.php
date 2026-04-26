<?php
session_start();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'Aditya' && $password == '1234') {
        $_SESSION['user'] = $username;
        header("Location: registration.php");
        exit();
    } else {
        echo "<h3 style='color:red;'>Invalid Login</h3> ";
    }
}
?>