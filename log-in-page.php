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
            <li class="current" data-lang-key="auth-login">Авторизация</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 data-lang-key="log-login">Войдите в личный кабинет</h2>
       <form action = "forms/auth.php" method="post">
      <div class="form-holder">
      <span class="lnr lnr-envelope"></span>
      <input type="text" class="form-control" placeholder="Login" name="login">
      </div>
    <div class="form-holder">
    <span class="lnr lnr-lock"></span>
    <input type="password" class="form-control" placeholder="Password" name="pass">
    </div>
        <a href="reg-in-page.php">
          <p data-lang-key="reg-login">У вас нет аккаунта?</p>
        </a>
    <button class="my-button" type="submit">
    <span data-lang-key="enter-login">Войти</span>
    </button>
</form>
      </div><!-- End Section Title -->

    </section><!-- /Starter Section Section -->

  </main>

<?php include 'footer.php'; ?>

</body>

</html>