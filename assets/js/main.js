(function() {
  "use strict";

  /**
   * Apply .scrolled class to the body as the page is scrolled down
   */
  function toggleScrolled() {
    const selectBody = document.querySelector('body');
    const selectHeader = document.querySelector('#header');
    if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
    window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /**
   * Mobile nav toggle
   */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToogle() {
    document.querySelector('body').classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }
  mobileNavToggleBtn.addEventListener('click', mobileNavToogle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.mobile-nav-active')) {
        mobileNavToogle();
      }
    });

  });

  /**
   * Lang switcher
   */

  document.addEventListener('DOMContentLoaded', function () {
    var changeLangButton = document.querySelector('.change-lang');

    changeLangButton.addEventListener('click', function (e) {
      e.preventDefault(); // Добавлен вызов preventDefault для предотвращения стандартного поведения элемента
      var currentLang = this.getAttribute('data-current-lang');
      var newLang = currentLang === 'ru' ? 'ua' : 'ru';
      var newFlag = currentLang === 'ru' ? './assets/img/ua.png' : './assets/img/russia.png';
      this.querySelector('img').src = newFlag;
      this.setAttribute('data-current-lang', newLang);
      loadNewLang(newLang);
    });

    function loadNewLang(lang) {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', './assets/js/translations/' + lang + '.json', true);
      xhr.onload = function () {
        if (xhr.status === 200) {
          var translations = JSON.parse(xhr.responseText);
          console.log(translations);
          translatePage(translations);
        } else {
          console.error('Ошибка загрузки файла с переводом:', xhr.statusText);
        }
      };
      xhr.send();
    }

    function translatePage(translations) {
      document.querySelectorAll('[data-lang-key]').forEach(function (element) {
        var key = element.getAttribute('data-lang-key');
        if (translations[key]) {
          element.textContent = translations[key];
        }
      });
    }
  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      if (document.querySelector('.mobile-nav-active')) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
      }
    });
  });

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });


/**
   * Task skipper
   */

const links = document.querySelectorAll('.services-list a');
const contents = document.querySelectorAll('.content');

links.forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const targetId = link.getAttribute('data-target');
    const targetContent = document.querySelector(targetId);

    // Удаление класса 'active' у всех ссылок
    links.forEach((otherLink) => {
      otherLink.classList.remove('active');
    });

    // Добавление класса 'active' к текущей активной ссылке
    link.classList.add('active');

    // Удаление класса 'active' у всех контентных блоков
    contents.forEach((content) => {
      content.classList.remove('active');
    });

    // Добавление класса 'active' к целевому контентному блоку
    targetContent.classList.add('active');
  });
});

  /**
   * Frequently Asked Questions Toggle
   */
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll('.swiper').forEach(function(swiper) {
      let config = JSON.parse(swiper.querySelector('.swiper-config').innerHTML.trim());
      new Swiper(swiper, config);
    });
  }
  window.addEventListener('load', initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      const section = document.querySelector(window.location.hash);
      if (section) {
        section.scrollIntoView({
          behavior: "smooth",
          block: "start"
        });
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuActive() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuActive);
  document.addEventListener('scroll', navmenuActive);

})();


/**
   * Support jpegs
   */
document.getElementById('exampleFormControlFile1').addEventListener('change', function(event) {
  var files = event.target.files;
  var previewArea = document.getElementById('imagePreviewArea');
  previewArea.innerHTML = ''; // Очистить предыдущие изображения

  for (var i = 0; i < files.length; i++) {
      var file = files[i];

      if (file.type.startsWith('image/')) { // Проверка, что файл является изображением
          var img = document.createElement('img');
          img.classList.add('img-thumbnail');
          img.file = file;

          previewArea.appendChild(img); // Добавить изображение в контейнер

          var reader = new FileReader();
          reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);
          reader.readAsDataURL(file);
      }
  }
});

/**
   * Admin table
   */

document.getElementById('searchButton').addEventListener('click', function() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("userTableBody");
  tr = table.getElementsByTagName("tr");
  var selectedIndex = document.getElementById("searchField").selectedIndex;
  
  for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[selectedIndex + 1]; // +1 потому что индексация столбцов начинается с 0
      if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
          } else {
              tr[i].style.display = "none";
          }
      }       
  }
});

$(document).ready(function () {
  // Обработчик клика по ячейкам таблицы с логинами
  $('tbody#userTableBody td:nth-child(2) a').click(function (e) {
    e.preventDefault(); // Отменяем стандартное поведение ссылки

    // Извлекаем значение логина из атрибута data-login
    var login = $(this).data('login');
    var mail = $(this).data('mail');
    // Устанавливаем значение логина в заголовок модального окна
    $('#exampleModalLabel').text('Логин: ' + login);

    // Открываем модальное окно
    $('#exampleModal').modal('show');
  });
});