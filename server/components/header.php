<header>
  <nav>
    <a href="/">logo</a>
    <?php if (empty($_COOKIE['user'])): ?>
      <a href="/reg.php">Зарегистрироваться</a>
      <a href="/login.php">Войти</a>
    <?php endif ?>
    <?php 
      if (!empty($_COOKIE['user'])) {
        require_once __DIR__ . '/../actions/pdo.php';

        $query = $pdo->prepare(
          "SELECT role FROM users WHERE id=:user_id"
        );
        $query->bindValue(':user_id', $_COOKIE['user']);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        $isAdmin = $user['role'] === 'admin';
      }
    ?>
    <?php if (!empty($_COOKIE['user']) && $isAdmin): ?>
      <a href="/admin.php">Панель администратора</a>
    <?php endif ?>
    <?php if (!empty($_COOKIE['user']) && !$isAdmin): ?>
      <a href="/dashboard.php">Личный кабинет</a>
    <?php endif ?>
    <?php if (!empty($_COOKIE['user'])): ?>
      <a href="../actions/logout.php">Выйти</a>
    <?php endif ?>
  </nav>
</header>