<footer>
      <div class="footer-section">
        <div class="full-column">
          <div class="header__logo">
            <p>АРЕНДАТАЧЕК.РФ</p>
          </div>
          <div class="inline-block">
            <div>
              <p class="text15">+7 (499) 110-20-47</p>
              <p class="text16">Рабочие часы: с 10:00 до 20:00</p>
            </div>
            <div>
              <button class="butt9">Заказать звонок</button>
            </div>
          </div>
          <div class="icon-text">
            <div>
              <img src="./templates/img/ic1.svg" alt="" />
              <p>г. Ногинск, ул. Ремесленная, д. 1178А</p>
            </div>
            <div class="pupa-dupa">
              <img src="./templates/img/ic2.svg" alt="" />
              <p>info@арендатачек.рф</p>
            </div>
          </div>
        </div>
        <div class="border">
          <div class="title-column">
            <div class="addaptive-footer">
              <p class="title">клиентам</p>
              <img
                class="strelka-footer"
                src="./templates/img/strelka.svg"
                alt=""
              />
            </div>
            <div class="to">
              <p>О нас</p>
              <p>Условия</p>
              <p>Отзывы</p>
              <p>Статьи</p>
              <p>Контакты</p>
            </div>
          </div>
          <div class="title-column">
            <div class="addaptive-footer">
              <p class="title">автопарк</p>
              <img
                class="strelka-footer"
                src="./templates/img/strelka.svg"
                alt=""
              />
            </div>
            <div class="to">
              <p>Внедорожники</p>
              <p>СпортКар</p>
              <p>Бизнес</p>
              <p>Премиум</p>
              <p>Комфорт</p>
            </div>
          </div>
          <div class="title-column">
            <div class="addaptive-footer">
              <p class="title">мероприятие</p>
              <img
                class="strelka-footer"
                src="./templates/img/strelka.svg"
                alt=""
              />
            </div>
            <div class="to">
              <p>На свадьбу</p>
              <p>На фотосессию</p>
              <p>На видеосьемку</p>
              <p>На день рождения</p>
            </div>
          </div>
          <div class="palka"></div>
          <div class="politic">
            <p>© 2023 Кчау</p>
            <p>Политика конфиденциальности</p>
          </div>
        </div>
      </div>
    </footer>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="scripts/slider.js"></script>

<!-- Скрипт для рещистрации Service Worker -->
<script>
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
</script>
<!-- Далее предствален код для интеграции в PWA  -->

<link rel="apple-touch-icon" sizes="57x57" href="./pwa/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="./pwa/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="./pwa/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="./pwa/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="./pwa/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="./pwa/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="./pwa/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="./pwa/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="./pwa/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="./pwa/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="./pwa/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="./pwa/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="./pwa/favicon-16x16.png">
<link rel="manifest" href="./pwa/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

