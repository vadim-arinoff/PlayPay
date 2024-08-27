<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; 
if (!isset($_SESSION)) {
    session_start();}
    // Проверка, залогинен ли пользователь
if (!isset($_SESSION['login'])) {
  // Если в сессии нет логина, перенаправляем на страницу входа
  header('Location: log-in-page.php');
  exit();
}
?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" data-lang-key="lk-service">Личный кабинет</h1>
        <?php 
          if ($_SESSION['login'] == 'admin') {
              echo '<a href="admin.php" id="admin-button" class="btn-getstarted">Перейти в админку</a>';
          }
        ?>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php" data-lang-key="main-hd">Главная</a></li>
            <li class="current" data-lang-key="lk-service">Личный кабинет</li>
          <li><a href="forms/logout.php" class="logout-button" data-lang-key="logout-pd">Выйти</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/app-1.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/app-2.jpg" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/app-3.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3 data-lang-key="hi-pd">Здравствуйте!</h3><h3><?php echo $_SESSION['login']; ?></h3>
              <h6 data-lang-key="info-pd">Здесь вы можете ознакомиться с информацией о вашем личном кабинете</h6>
              <ul>
                <li><strong data-lang-key="date-pd">Дата регистрации:</strong> <?php echo $_SESSION['date']; ?></li>
                <li><strong data-lang-key="rockets-pd">Счётчик Рокет:</strong> <?php echo $_SESSION['rockets']; ?></li>
                <li><strong data-lang-key="tasks-pd">Количество выполненных заданий:</strong> <?php echo $_SESSION['tasks']; ?></li>
                <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2 data-lang-key="profile-pd">Это ваш профиль</h2>
              <p data-lang-key="profile-info-pd">Здесь вы можете управлять вашим профилем. Вы можете отслеживать ваши достижения, количество рокет, дату регистрации и прочее. Вы можете выполнять задания, изменять данные профиля и прочее. Даже, если пожелаете, бесследно удалить профиль...</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Portfolio Details Section -->

    <section id="service-details" class="service-details section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="services-list">
          <a href="#" data-target="#content-1" data-lang-key="info1-li-pd" class="active">Данные профиля</a>
          <a href="#" data-target="#content-2" data-lang-key="info2-li-pd">Количество заданий</a>
          <a href="#" data-target="#content-3" data-lang-key="info3-li-pd">Прогресс</a>
          <a href="#" data-target="#content-4" data-lang-key="info4-li-pd">Что-то ещё</a>
          <a href="#" data-target="#content-5" data-lang-key="info5-li-pd">Удалить профиль</a>
        </div>
        <h4 data-lang-key="mninfo-pd">Здесь основная информация о вашем профиле</h4>
        <p data-lang-key="redact-pd">Вы можете изменить данные профиля</p>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <div id="content-1" class="content active">
          <h3 data-lang-key="edit-pd">Редактировать данные профиля</h3>
          <p data-lang-key="edit-li-pd">Выберите, что желаете изменить:</p>
          <ul>
            <li><i class="bi bi-arrow-bar-right"></i> <span>Имя: <?php echo $_SESSION['login']; ?></span></li>
            <li>
              <form action="forms/update_profile.php" method="post">
                <input type="text" name="login" placeholder="Введите имя" id="loginInput">
                <button class="btn-getstarted" id="save-btn" type="submit" data-lang-key="refresh-pd">Обновить</button>
              </form>
            </li>
            <li><i class="bi bi-arrow-bar-right"></i> <span>Почту: <?php echo $_SESSION['mail']; ?></span></li>
            <li>
              <form action="forms/update_profile.php" method="post">
                <input type="text" name="mail" placeholder="Введите почту" id="loginInput">
                <button class="btn-getstarted" id="save-btn" type="submit" data-lang-key="refresh-pd">Обновить</button>
              </form>
            </li>
            <li><i class="bi bi-arrow-bar-right"></i> <span>Номер счёта</span></li>
          </ul>
          <p data-lang-key="save-li-pd">После ввода данных - нажмите на кнопку сохранения.</p>
          <a class="btn-getstarted" href="" data-lang-key="save-pd">Сохранить</a>
        </div>

        <div id="content-2" class="content">
          <h3 data-lang-key="task-li-pd">Ваши задания</h3>
          <p data-lang-key="tasks-li-pd">Здесь вы увидите количество пройденных вами заданий</p>
          <ul>
            <li><i class="bi bi-arrow-bar-right"></i> <span data-lang-key="capcha-tsk-pd">Пройденные капчи: %CAPTCHA%</span></li>
            <li><i class="bi bi-arrow-bar-right"></i> <span data-lang-key="app-tsk-pd">Оценённые приложения: %APPS%</span></li>
            <li><i class="bi bi-arrow-bar-right"></i> <span data-lang-key="comment-tsk-pd">Оставленные комментарии: %COMMENTS%</span></li>
          </ul>
          <p data-lang-key="task-bt-pd">Желаете заработать ещё? Жмите на кнопку!</p>
          <a class="btn-getstarted" href="service-details.php" data-lang-key="go-li-service">Поехали!</a>
        </div>

         <div id="content-3" class="content">
          <h3>Content 3 title</h3>
          <p>Content 3 text</p>
        </div>

         <div id="content-4" class="content">
          <h3>Content 4 title</h3>
          <p>Content 4 text</p>
        </div>

         <div id="content-5" class="content">
          <h3>Content 5 title</h3>
          <p>Content 5 text</p>
        </div>

      </div>

    </div>

  </div>

</section>

  </main>

  <?php include 'footer.php'; ?>

</body>

</html>