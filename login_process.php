<?php
session_start();
require 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    header('Location: main_page.php');
    exit();
} else {
    $_SESSION['error'] = 'Invalid username or password.';
    header('Location: login.php');
    exit();
}
mysqli_close($conn);
?>
