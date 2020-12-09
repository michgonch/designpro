<?php

require_once('pdo.php');

$user_id = $_COOKIE['user'];
$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);

$query = $pdo->prepare(
  "INSERT INTO orders (user_id, title, description) 
  VALUES (:user_id, :title, :description)"
);

$query->bindValue(':user_id', $user_id);
$query->bindValue(':title', $title);
$query->bindValue(':description', $description);

try {
  $query->execute();
} catch (PDOException $e) {
  echo '
  Произошла ошибка. <br>
  <a href="/dashboard.php">Вернуться</a>
  ';
  exit();
}

echo '
Заявка успешно добавлена. <br>
<a href="/dashboard.php">Продолжить</a>
';
