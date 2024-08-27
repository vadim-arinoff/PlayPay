<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';
 ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0" data-lang-key="tasks-service">Задания</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="portfolio-details.php" data-lang-key="lk-service">Личный кабинет</a></li>
            <li class="current" data-lang-key="tasks-service">Задания</li>
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
          <a href="#" class="active" data-target="#content-1" data-lang-key="capcha-service">Прохождение капчи</a>
          <a href="#" data-target="#content-2" data-lang-key="apps-service">Оценка приложений</a>
          <a href="#" data-target="#content-3" data-lang-key="like-service">Поставить лайк</a>
          <a href="#" data-target="#content-4" data-lang-key="rate-service">Рерайтинг текста</a>
          <a href="#" data-target="#content-5" data-lang-key="comments-service">Оставить комментарий</a>
        </div>

        <h4 data-lang-key="task-li-service">Вы можете просмотреть здесь задачи</h4>
        <p data-lang-key="tasks-li-service">Перед вами список задач, с которыми вы можете ознакомится и выбрать понравившиеся вам</p>
      </div>

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <div id="content-1" class="content active">
          <h3 data-lang-key="capcha-li-service">Прохождение капч</h3>
          <p data-lang-key="capchas-li-service">Рассказываем про прохождение капч, фичи, способы:</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span data-lang-key="capcha1-li-service">Зайти на сайт</span></li>
            <li><i class="bi bi-check-circle"></i> <span data-lang-key="capcha2-li-service">Пройти капчу</span></li>
            <li><i class="bi bi-check-circle"></i> <span data-lang-key="capcha3-li-service">Получить ракеты и вывести их за шекели</span></li>
          </ul>
          <p data-lang-key="capcha4-li-service">Ну, это впринципе всё. Расценки ниже: <br><br>50 копеек за капчу, +20 коп. за сложную капчу с глазом у зайца.</p>
          <a class="btn-getstarted" href="service-details.php" data-lang-key="go-li-service">Поехали!</a>
        </div>

        <div id="content-2" class="content">
          <h3 data-lang-key="rate-li-service">Оценка приложений</h3>
          <p data-lang-key="rating-li-service">Вы можете оценивать приложения и получать за них деньги</p>
          <ul>
            <li><i class="bi bi-check-circle"></i> <span data-lang-key="rate1-li-service">Скачайте приложение</span></li>
            <li><i class="bi bi-check-circle"></i> <span data-lang-key="rate2-li-service">Проведите в нём немного времени</span></li>
            <li><i class="bi bi-check-circle"></i> <span data-lang-key="rate3-li-service">Поставьте оценку</span></li>
          </ul>
          <p data-lang-key="rate4-li-service">Ну, это впринципе всё. Расценки ниже:<br><br>2 руб за приложение, +50 коп. за каждый проведённый час в нём.</p>
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

    </section><!-- /Service Details Section -->

  </main>

<?php include 'footer.php'; ?>

</body>

</html>