<?php
require_once("./controllers/head.php");
require_once("./templates/header.php");


require_once("./controllers/connect.php");
$query = "SELECT * FROM catalog where id =" . $_GET['id'];
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);



$result = '';
$result .= '<section class="product-info">';
$result .= ' <div><a class="go-back" href="index.php">Каталог</a></div>';
$result .= ' <div class="main-info">';
$result .= '  <div class="left-side slider single-item"><img src="templates/img/photos/' . $data["id"] . '-' . $data['name'] . '/' . 'main' . '.jpg" alt="" /><img src="templates/img/photos/' . $data["id"] . '-' . $data['name'] . '/' . '2' . '.jpg" alt="" /><img src="templates/img/photos/' . $data["id"] . '-' . $data['name'] . '/' . '3' . '.jpg" alt="" /></div>';
$result .= '  <div class="right-side">';
$result .= '   <div class="description">';
$result .= '    <div class="name-car"><p>' . $data['full_name']  . ', ' . $data['year'] . '</p></div>';
$result .= '    <div class="price"><p>от ' . $data['cost_min'] . ' тыс/р</p></div> ';
$result .= '   </div>';
$result .= '    <div class="second-section__cars-item--specifications">';
$result .= '        <div class="second-section__cars-item--specifications--volume">';
$result .= '            <img src="./templates/img/engine.png" alt="" />';
$result .= '            <p>' . $data['value_engine'] . ' л / ' . $data['engine'] . '</p>';
$result .= '        </div>';
$result .= '        <div class="second-section__cars-item--specifications--power">';
$result .= '            <img src="./templates/img/wheel.png" alt="" />';
$result .= '            <p>' . $data['power'] . ' л.с.</p>';
$result .= '    </div>';
$result .= '   </div>';
$result .= '   <div><button class="button">Арендовать</button></div>';
$result .= '  </div>';
$result .= ' </div>';
$result .= ' <div class="about-car"><p>' . $data['description'] . '</p></div>';
$result .= '</section>';


echo $result;


require_once("./templates/footer.php");
?>

<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script  src="slick\slick.min.js"></script>
<script type="text/javascript" src="templates/scripts/slider.js"></script>
