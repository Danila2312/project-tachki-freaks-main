<section>
  <div class="first-section__rent">
    <div class="text1">
      <p>Заказать аренду online</p>
    </div>
    <div class="line-chips">
      <div class="inputik">
        <input class="input1" type="date" placeholder="Начало аренды" />
        <input class="input2" type="date" placeholder="Завершение аренды" />
      </div>
      <div class="checkbox">
        <div>
          <input type="checkbox" id="coding" name="interest" value="coding" />
          <label for="coding">Внедорожник</label>
        </div>
        <div>
          <input type="checkbox" id="coding" name="interest" value="coding" />
          <label for="coding">Спорт</label>
        </div>
        <div>
          <input type="checkbox" id="coding" name="interest" value="coding" />
          <label for="coding">Бизнес</label>
        </div>
        <div>
          <input type="checkbox" id="coding" name="interest" value="coding" />
          <label for="coding">Спорткар</label>
        </div>
        <div>
          <input type="checkbox" id="coding" name="interest" value="coding" />
          <label for="coding">Премиум</label>
        </div>
        <div>
          <input type="checkbox" id="coding" name="interest" value="coding" />
          <label for="coding">Комфорт</label>
        </div>
      </div>
      <div class="button">
        <p class="text2">Найти варианты</p>
      </div>
    </div>
  </div>
</section>
<section class="second-section">
  <div class="second-section__title">
    <h2 class="text3">Наш автопарк</h2>
  </div>
  <div class="second-section__filter">
    <button class="button-car button-all" data-category="all">
      Все машины
    </button>
    <button class="button-car car-suv active" data-category="suv">
      <img src="templates/img/Group 47.svg" alt="" />Внедорожники
    </button>
    <button class="button-car car-business" data-category="business">
      <img src="templates/img/Group 46.png" alt="" />Бизнес
    </button>
    <button class="button-car car-sport" data-category="sport">
      <img src="templates/img/Group 48.png" alt="" />Спорткар
    </button>
    <button class="button-car car-premium" data-category="premium">
      <img src="templates/img/Group 49.png" alt="" />Премиум
    </button>
    <button class="button-car car-comfort" data-category="comfort">
      <img src="templates/img/Group 50.png" alt="" />Комфорт
    </button>
  </div>

  <div class="second-section__cars">
    <?

    $query = "SELECT * FROM 'catalog'";
    $result = mysqli_query($link, "SELECT * FROM `catalog`");
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);


    foreach ($data as $elem) {
      $result = '';
      $result .= '<div class="second-section__cars-item ' . $elem['category'] . '">';
      $result .= '  <div class="second-section__cars-item--country"><a>' . $elem['city'] . '</a></div>';
      $result .= '  <div class="second-section__cars-item--img"><img src="templates/img/photos/' . $elem["id"] . '-' . $elem['name'] . '/' . 'main' . '.jpg" alt="" /></div>';
      $result .= '  <div class="second-section__cars-item--name-car"><p>' . $elem['full_name']  . ', ' . $elem['year'] . '<p/></div>';
      $result .= '  <div class="second-section__cars-item--specifications">';
      $result .= '    <div class="second-section__cars-item--specifications--volume">';
      $result .= '      <img src="./templates/img/engine.png" alt="" />';
      $result .= '      <p>' . $elem['value_engine'] . ' л / ' . $elem['engine'] . '</p>';
      $result .= '    </div>';
      $result .= '    <div class="second-section__cars-item--specifications--power">';
      $result .= '      <img src="./templates/img/wheel.png" alt="" />';
      $result .= '      <p>' . $elem['power'] . ' л.с.</p>';
      $result .= '    </div>';
      $result .= '  </div>';
      $result .= '  <div class="second-section__cars-item--book">';
      $result .= '    <div class="button">';
      $result .= '      <a class="text2" href="product.php?id=' . $elem['id'] . '">Забронировать</a>';
      $result .= '    </div>';
      $result .= '    <div class="price">';
      $result .= '      <p>от <span class="price-color">' . $elem['cost_min'] . '</span> руб/сут.</p>';
      $result .= '    </div>';
      $result .= '  </div>';
      $result .= '</div>';


      echo $result;
    }
    ?>
  </div>
</section>
<script type="text/javascript" src="filter.js"></script>