<?php
include_once "connect.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login'] = true;
        header("Location: /admin");
        exit();
    } else {
        $_SESSION['error'] = 'Invalid username or password';
        header("Location: /auth/login");
        exit();
    }
}
?>