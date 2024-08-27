<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php" data-lang-key="main-login">Главная</a></li>
            <li class="current" data-lang-key="register-reg">Регистрация</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 data-lang-key="log-login">Войдите в личный кабинет</h2>
       <form action = "forms/check.php" method="post">
    <h3 data-lang-key="new-reg">Новый аккаунт?</h3>
      <div class="form-holder">
      <span class="lnr lnr-user"></span>
      <input type="text" class="form-control" placeholder="Username" name="login">
      </div>
    <div class="form-holder">
    <span class="lnr lnr-phone-handset"></span>
    <input type="text" class="form-control" placeholder="Phone Number" name="phone">
    </div>
      <div class="form-holder">
      <span class="lnr lnr-envelope"></span>
      <input type="text" class="form-control" placeholder="Mail" name="mail">
      </div>
    <div class="form-holder">
    <span class="lnr lnr-lock"></span>
    <input type="password" class="form-control" placeholder="Password" name="pass">
    <input type="hidden" name="rockets" value="0">
    </div>
        <div class="image-container-log">
          <img src="assets/img/about-img.svg" alt="Image">
        </div>
        <a href="log-in-page.php">
          <p data-lang-key="available-reg">Уже есть аккаунт?</p>
        </a>
    <button class="my-button" type="submit">
    <span data-lang-key="create-reg">Создать аккаунт</span>
    </button>
</form>
      </div><!-- End Section Title -->

    </section><!-- /Starter Section Section -->

  </main>

<?php include 'footer.php'; ?>

</body>

</html>