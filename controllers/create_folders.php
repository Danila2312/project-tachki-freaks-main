<?

$host = 'localhost';
$name = 'root';
$password = '';
$db_name = 'database';

$conn = mysqli_connect($host, $name, $password, $db_name);



$sql = "SELECT id, name FROM `catalog`";
$result = $conn->query($sql);
if (!$result) {
  die("Ошибка выполнения запроса: " . $conn->error);
}

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
    $carId = $row['id'];
    $carName = $row['name'];

    $folderName = $carId . "-" . strtolower(preg_replace("/[^a-zA-Z0-9]+/", "", $carName));

    // echo "ID: " . $carId . ", Name: " . $carName . "<br>";

    $folderPath = "templates/img/photos/" . $folderName;
    if (!is_dir($folderPath)) {
      mkdir($folderPath);
      echo "Папка $folderName успешно создана.<br>";
    }
  }
} else {
  echo "Нет доступных автомобилей в базе данных.";
}
$conn->close();
