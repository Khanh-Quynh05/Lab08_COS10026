<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$token = $_POST['token'] ?? '';

if ($username == 'Quynh' && $password == '105029408') {
    $_SESSION['user'] = $username;
    $_SESSION['token'] = $token;
    header('Location: welcome.php');
    exit();
} else {
    include 'header.inc';
    echo '<p>Invalid login. <a href="login.php">Try again</a></p>';
    include 'footer.inc';
}
