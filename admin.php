<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';
include 'forms/db.php';
$sort = $_GET['sort'] ?? 'id';
$order = $_GET['order'] ?? 'asc';
$allowedSorts = ['id', 'rockets', 'tasks', 'date'];
$allowedOrders = ['asc', 'desc'];

if (!in_array($sort, $allowedSorts)) {
    $sort = 'id';
}
if (!in_array($order, $allowedOrders)) {
    $order = 'asc';
}

$query = "SELECT id, login, mail, phone, rockets, tasks, date FROM users ORDER BY $sort $order";
$stmt = $pdo->query($query);
?>

  <main class="main">
  <script src="assets/js/main.js"></script>
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Админка</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="portfolio-details.php">Личный кабинет</a></li>
            <li class="current">Админская панель</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="services-list">
          <a href="#" class="active" data-target="#content-1">Все пользователи</a>
          <a href="#" data-target="#content-2">Управление заданиями</a>
          <a href="#" data-target="#content-3">Таски</a>
          <a href="#" data-target="#content-4">***</a>
          <a href="#" data-target="#content-5">Удалить пользователя</a>
        </div>

        <h4>Это твоя админская панель</h4>
        <p>Das auto. Управляй мечтой</p>
      </div>

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <div id="content-1" class="content active">
          <h3>Список пользователей</h3>
          <p>
            <div class="table-responsive">
            <div class="input-group mb-3">
                <select class="form-select" id="searchField">
                    <option value="login">Логин</option>
                    <option value="phone">Телефон</option>
                    <option value="mail">Почта</option>
                </select>
                <input type="text" class="form-control" id="searchInput" placeholder="Введите значение...">
                <a class="btn-getstarted" id="searchButton" href="javascript:void(0);">Найти пользователя</a>
            </div>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col"><a href="?sort=id&order=<?= ($sort == 'id' && $order == 'asc') ? 'desc' : 'asc' ?>">Id</a></th>
                  <th scope="col">Login</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Mail</th>
                  <th scope="col"><a href="?sort=rockets&order=<?= ($sort == 'rockets' && $order == 'asc') ? 'desc' : 'asc' ?>">Rockets</a></th>
                  <th scope="col"><a href="?sort=tasks&order=<?= ($sort == 'tasks' && $order == 'asc') ? 'desc' : 'asc' ?>">Tasks</a></th>
                  <th scope="col"><a href="?sort=date&order=<?= ($sort == 'date' && $order == 'asc') ? 'desc' : 'asc' ?>">Date</a></th>
                </tr>
              </thead>
              </p>
              <tbody id="userTableBody">
              <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-login="<?= htmlspecialchars($row['login']) ?>"><?= htmlspecialchars($row['login']) ?></a></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['mail']) ?></td>
                <td><?= htmlspecialchars($row['rockets']) ?></td>
                <td><?= htmlspecialchars($row['tasks']) ?></td>
                <td><?= htmlspecialchars($row['date']) ?></td>
            </tr>
            <?php endwhile; ?>
              </tbody>
              <!-- Pop-up form -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <!-- Форма редактирования данных -->
                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <ul>
              <li><i class="bi bi-arrow-bar-right"></i> <span>Имя: <?php echo $_SESSION['login']; ?></span></li>
              <li>
                <form action="forms/update_profile.php" method="post">
                  <input type="text" name="login" placeholder="Введите имя" id="loginInput-admin"> 
                </form>
              </li>
              <li><i class="bi bi-arrow-bar-right"></i> <span>Телефон: <?php echo $_SESSION['phone']; ?></span></li>
              <li>
                <form action="forms/update_profile.php" method="post">
                  <input type="text" name="phone" placeholder="Введите телефон" id="loginInput-admin">
                </form>
              </li>
              <li><i class="bi bi-arrow-bar-right"></i> <span>Почту: <?php echo $_SESSION['mail']; ?></span></li>
              <li>
                <form action="forms/update_profile.php" method="post">
                  <input type="text" name="mail" placeholder="Введите почту" id="loginInput-admin">
                </form>
              </li>
            </ul>
          </div>
        <!-- Форма редактирования данных -->
                  </div>
                  <div class="modal-footer">
                    <button type="button">Сохранить</button>
                  </div>
                </div>
              </div>
            <!-- Pop-up form -->
            </table>
          </div> 
        </div>

        <div id="content-2" class="content">
          <h3>Список заданий</h3>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span>***</span></li>
            <li><i class="bi bi-check-circle"></i> <span>***</span></li>
            <li><i class="bi bi-check-circle"></i> <span>***</span></li>
          </ul>          
          <a class="btn-getstarted" href="admin.php">Обновить список</a>
        </div>

         <div id="content-3" class="content">
          <h3>Content 3 title</h3>
          <p>Content 3 text</p>
        </div>

        <div id="content-4" class="content">
          <h3>***</h3>
          <form method="post" action="">
              <input type="text" name="login" placeholder="Введите логин" required>
              <input type="submit" value="Найти пользователя">
          </form>
        </div>

         <div id="content-5" class="content">
          <h3>Удаление пользователя</h3>
          <form method="post" action="forms/delete_user.php">
            <input type="text" name="login" placeholder="Введите логин" required>
            <input type="submit" value="Удалить пользователя">
          </form>
          <?php
          if (isset($_GET['deleted'])) {
              echo "<p>Пользователь с логином '" . htmlspecialchars($_GET['deleted']) . "' был успешно удален.</p>";
          }
          if (isset($_GET['error'])) {
              echo "<p>" . htmlspecialchars($_GET['error']) . "</p>";
          }
          ?>
        </div>

      </div>

    </div>

  </div>

    </section><!-- /Service Details Section -->

  </main>

<?php include 'footer.php'; ?>

</body>

</html>