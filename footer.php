<footer id="footer" class="footer position-relative">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4 data-lang-key="actual-news">Будьте в курсе актуальных новостей!</h4>
            <p data-lang-key="mailing-news">Подпишитесь на нашу рассылку и получайте последние новости о наших продуктах и услугах!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Ваш запрос на подписку был отправлен. Спасибо!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

<!-- Button trigger modal -->
<button class="my-button" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-lang-key="technical-support">
  Техническая поддержка
</button>

<!-- Тех. поддержка -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" data-lang-key="ticket-support">Тикет</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <select class="custom-select custom-select-lg mb-3">
        <option selected data-lang-key="theme-support">Тема тикета</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <div class="form-group">
        <input type="text" class="form-control"  placeholder="name@example.com" id="loginInput">
        <textarea class="form-control" id="ticket-text" rows="3" placeholder="Опишите проблему"></textarea>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" multiple>
        <div id="imagePreviewArea"></div>
        <button class="my-button" type="button" data-lang-key="send-support">Отправить</button>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="">Play&Pay</span>
          </a>
          <div class="footer-contact pt-3">
            <p class="mt-3"><strong>Telegram:</strong> <span>@Arinov3</span></p>
            <p><strong>Email:</strong> <span>sheesh@example.com</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4 data-lang-key="links-footer">Полезные ссылки</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#" data-lang-key="main-hd">Главная</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#" data-lang-key="start-hd">С чего начать</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#" data-lang-key="tasks-hd">Задания</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#" data-lang-key="account-link-footer">Личный кабинет</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4 data-lang-key="sub-footer">Подписывайся на нас!</h4>
          <p data-lang-key="news-sub-footer">Ты можешь перейтьи по ссылкам ниже и следить за новостями</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1">Play&Pay</strong> <span>All Rights Reserved</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>