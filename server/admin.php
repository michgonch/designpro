<?php 
if (empty($_COOKIE['user'])) {
  header('Location: /login.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Design.pro - дизайн интерьера</title>
</head>
<body>
  <?php require 'components/header.php'; ?>
  
  <main>
    <h1>Панель администратора</h1>

    <h2>Все заявки</h2>
    <ul>
      <?php 
        require_once 'actions/pdo.php';

        $query = $pdo->prepare(
          "SELECT * FROM orders"
        );

        $user_id = $_COOKIE['user'];
        $query->bindValue(':user_id', $user_id);
        $query->execute();

        $orders = $query->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <?php foreach($orders as $order): ?>
        <?php foreach($order as $k => $v): ?>
          <div><?php echo "$k $v" ?></div>
        <?php endforeach ?>
      <?php endforeach ?>
    </ul>
  </main>

  <?php require 'components/footer.php'; ?>
</body>
</html>