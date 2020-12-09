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
    <h1>Регистрация</h1>
    <form action="actions/reg.php" method="POST">
      <label>
        ФИО <input type="text" name="name" required>
      </label>
      <label>
        Логин <input type="text" name="login" required>
      </label>
      <label>
        Email <input type="email" name="email" required>
      </label>
      <label>
        Пароль <input type="password" name="password" required>
      </label>
      <label>
        Повторите пароль <input type="password" required>
      </label>
      <label>
        <input type="checkbox"> Согласен с политикой обработки персональных данных
      </label>
      <button type="submit">Зарегистрироваться</button>
    </form>
  </main>

  <?php require 'components/footer.php'; ?>
</body>
</html>