<?php
require_once 'pdo.php';

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));

$query = $pdo->prepare(
  "INSERT INTO users (name, login, email, password, role) 
  VALUES (:name, :login, :email, :password, :role)"
);

$query->bindValue(':name', $name);
$query->bindValue(':login', $login);
$query->bindValue(':email', $email);
$query->bindValue(':password', $password);
$query->bindValue(':role', 'client');

$query->execute();

header('Location: /login.php');

