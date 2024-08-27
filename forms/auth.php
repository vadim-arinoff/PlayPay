<?php
if (!isset($_SESSION)) {
    session_start();}
$login = filter_var(trim($_POST['login']));
$pass = filter_var(trim($_POST['pass']));
$phone = '';
$mail = '';
$rockets = '';
$tasks = '';
$date = '';

$hashedPass = md5($pass."rgez12dvt5zj7");

$mysql = new mysqli('localhost', 'root', 'root', 'playpay');

if ($mysql->connect_error) {
    die("Connection failed: ". $mysql->connect_error);
}

$stmt = $mysql->prepare("SELECT * FROM `users` WHERE `login` =? AND `pass` =?");
$stmt->bind_param("ss", $login, $hashedPass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    echo "Такой пользователь не найден";
    exit();
}

$user = $result->fetch_assoc();
$_SESSION['login'] = $user['login'];
$_SESSION['mail'] = $user['mail'];
$_SESSION['date'] = $user['date'];
$_SESSION['rockets'] = $user['rockets'];
$_SESSION['tasks'] = $user['tasks'];

header('Location: ../portfolio-details.php');
exit();