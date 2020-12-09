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
    <h1>Вход в личный кабинет</h1>
    <form action="actions/login.php" method="POST">
      <label>
        Логин <input type="text" name="login" required>
      </label>
      <label>
        Пароль <input type="password" name="password" required>
      </label>
      <button type="submit">Войти</button>
    </form>
  </main>

  <?php require 'components/footer.php'; ?>
</body>
</html>