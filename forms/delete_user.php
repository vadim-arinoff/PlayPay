<?php
include 'db.php'; // Подключение к базе данных

$login = $_POST['login'];

// SQL запрос на удаление пользователя
$query = "DELETE FROM users WHERE login = ?";
$stmt = $pdo->prepare($query);
$result = $stmt->execute([$login]);

if ($stmt->rowCount() == 0) {
    header('Location: ../admin.php?error=Пользователь с логином не найден'); // Перенаправление с сообщением об ошибке
} elseif ($result) {
    header('Location: ../admin.php?deleted=' . urlencode($login)); // Перенаправление с параметром
} else {
    header('Location: ../admin.php?error=Ошибка удаления'); // Перенаправление с сообщением об ошибке
}
?>