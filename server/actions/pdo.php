<?php
function connectDB(){
  try {
    $pdo = new PDO(
      'mysql:host=db;dbname=designpro;charset=utf8;',
      'admin',
      'pass'
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}

$pdo = connectDB();