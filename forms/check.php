<?php
if (!isset($_SESSION)) {
    session_start();
}

$login = htmlspecialchars(trim($_POST['login']));
$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_NUMBER_FLOAT);
$mail = filter_var(trim($_POST['mail']), FILTER_SANITIZE_EMAIL);
$pass = htmlspecialchars(trim($_POST['pass']));
$rockets = htmlspecialchars(trim($_POST['rockets']));
$tasks = $_POST['tasks'] ?? NULL;
$date = date('Y-m-d H:i:s');

$mysql = new mysqli('localhost', 'root', 'root', 'playpay');
if ($mysql->connect_error) {
    die("Connection failed: " . $mysql->connect_error);
}

// Проверка уникальности логина, почты и телефона
$check = $mysql->prepare("SELECT `login`, `mail`, `phone` FROM `users` WHERE `login` = ? OR `mail` = ? OR `phone` = ?");
$check->bind_param("sss", $login, $mail, $phone);
$check->execute();
$result = $check->get_result();
if ($result->num_rows > 0) {
    echo "Логин, почта или телефон уже существуют";
    exit();
}

if (mb_strlen($login) < 4 || mb_strlen($login) > 30) {
    echo "Недопустимая длина логина";
    exit();
} elseif (!preg_match('/^\+?\d{10}$/', $phone)) {
    echo "Недопустимый номер телефона";
    exit();
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "Недопустимый формат электронной почты";
    exit();
}

$hashedpass = md5($pass . "rgez12dvt5zj7");

$stmt = $mysql->prepare("INSERT INTO `users` (`login`, `phone`, `mail`, `pass`, `rockets`, `tasks`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $login, $phone, $mail, $hashedpass, $rockets, $tasks, $date);

if (!$stmt->execute()) {
    echo "Ошибка выполнения запроса: " . $stmt->error;
    exit();
}

$user = $result->fetch_assoc();
$_SESSION['login'] = $user['login'];
$_SESSION['mail'] = $user['mail'];

header('Location: ../portfolio-details.php');
?>