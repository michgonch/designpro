<?php

require_once('pdo.php');

$query = $pdo->prepare(
  "SELECT * FROM users 
  WHERE login = :login 
  AND password = :password"
);

$query->bindValue(':login', $_POST["login"]);
$query->bindValue(':password', md5($_POST["password"]));

$query->execute();

$user = $query->fetch(PDO::FETCH_ASSOC);

if (empty($user)) {
  echo '
  Неверный логин или пароль. <br>
  <a href="/login.php">Попробовать снова</a>
  ';
  exit();
}

setcookie("user", $user["id"], time() + 86400, "/");

if ($user["role"] == "admin") {
    header('Location: /admin.php');
} else {
    header('Location: /dashboard.php');
}