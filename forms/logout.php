<?php
session_start(); // Начало сессии

if (isset($_SESSION['login'])) {
    session_destroy(); // Уничтожение всех данных сессии
    header('Location: ../index.php'); // Перенаправление на страницу входа
    exit();
} else {
    echo "Вы не вошли в систему";
    exit();
}
header('Location: ../index.php');
?>

