<?php
// Проверка, залогинен ли пользователь
if (!isset($_SESSION['login'])) {
    header('Location: log-in-page.php');
    exit();
}

// Подключение к базе данных
$mysql = new mysqli('localhost', 'root', 'root', 'playpay');

// Проверка подключения
if ($mysqli->connect_error) {
    die('Ошибка подключения: ' . $mysqli->connect_error);
}

$newMail = $mysqli->real_escape_string($_POST['mail']);

// Получение ID пользователя из сессии
$userId = $_SESSION['user_id']; 

// SQL запрос на обновление почты
$sql = "UPDATE users SET mail = '$newMail' WHERE id = '$userId'";

if ($mysqli->query($sql) === TRUE) {
    echo "Почта успешно обновлена";
} else {
    echo "Ошибка при обновлении почты: " . $mysqli->error;
}

?>