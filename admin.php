<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Админка</title>
</head>

<body>
    <h1>АдминОчка</h1>
    <h2>В наличии</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>category</th>
            <th>full_name</th>
            <th>year</th>
            <th>engine</th>
            <th>value_engine</th>
            <th>power</th>
            <th>cost_min</th>
            <th>cost_mid</th>
            <th>cost_max</th>
            <th>description</th>
        </tr>

        <?
        require_once("./controllers/connect.php");
        require_once("./controllers/create_folders.php");

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $city = $_POST['city'];
            $category = $_POST['category'];
            $full_name = $_POST['full_name'];
            $year = $_POST['year'];
            $engine = $_POST['engine'];
            $value_engine = $_POST['value_engine'];
            $power = $_POST['power'];
            $cost_min = $_POST['cost_min'];
            $cost_mid = $_POST['cost_mid'];
            $cost_max = $_POST['cost_max'];
            $description = $_POST['description'];


            $query = "INSERT INTO catalog SET name='$name', city='$city', category='$category', full_name='$full_name', year='$year', engine='$engine', value_engine='$value_engine',
        power='$power', cost_min='$cost_min', cost_mid='$cost_mid', cost_max='$cost_max', description='$description'";
            mysqli_query($link, $query) or die(mysqli_error($link));

        }
        if (isset($_GET['del'])) {
            $del = $_GET['del'];
            $query_insert = "INSERT INTO deleted SELECT * FROM catalog where id=$del";
            mysqli_query($link, $query_insert) or die(mysqli_error($link));
            $query_deleted = "DELETE FROM catalog WHERE id=$del";
            mysqli_query($link, $query_deleted) or die(mysqli_error($link));
        }


        $query = "SELECT * FROM catalog";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        for (
            $data = [];
            $row = mysqli_fetch_assoc($result);
            $data[] = $row
        )
            ;
        $result = '';
        foreach ($data as $elem) {
            $result .= '<tr>';
            $result .= '<td>' . $elem['id'] . '</td>';
            $result .= '<td>' . $elem['name'] . '</td>';
            $result .= '<td>' . $elem['city'] . '</td>';
            $result .= '<td>' . $elem['category'] . '</td>';
            $result .= '<td>' . $elem['full_name'] . '</td>';
            $result .= '<td>' . $elem['year'] . '</td>';
            $result .= '<td>' . $elem['engine'] . '</td>';
            $result .= '<td>' . $elem['value_engine'] . '</td>';
            $result .= '<td>' . $elem['power'] . '</td>';
            $result .= '<td>' . $elem['cost_min'] . '</td>';
            $result .= '<td>' . $elem['cost_mid'] . '</td>';
            $result .= '<td>' . $elem['cost_max'] . '</td>';
            $result .= '<td>' . $elem['description'] . '</td>';
            $result .= '<td><a href="upload-photos.php?' . $elem['id'] . '">View Photos</a></td>';
            $result .= '<td><a href ="?del=' . $elem['id'] . '">Удалить</a></td>';

            $result .= '</tr>';
        }

        echo $result;
        ?>
    </table>
    <h2>Добавить машину</h2>
    <form class="form-add-car" action="" method="POST">

        <input placeholder="name:" name="name">
        <input placeholder="city:" name="city">
        <input placeholder="category:" name="category">
        <input placeholder="full_name:" name="full_name">
        <input placeholder="year:" name="year">
        <input placeholder="engine:" name="engine">
        <input placeholder="value_engine" name="value_engine">
        <input placeholder="power:" name="power">
        <input placeholder="cost_min" name="cost_min">
        <input placeholder="cost_mid:" name="cost_mid">
        <input placeholder="cost_max:" name="cost_max">
        <input placeholder="description:" name="description">

        <input type="submit" value="добавить машину">
    </form>
    
    <?
    $uploadDir = './uploadFiles/';
    if ($_FILES) {
        $files = array_filter($_FILES['upload']['name']);
        $total = count($_FILES['upload']['name']);
        for ($i = 0; $i < $total; $i++) {

            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

            if ($tmpFilePath != "") {
                $newFilePath = $uploadDir . $_FILES['upload']['name'][$i];
                if (!file_exists($newFilePath)) {
                    move_uploaded_file($tmpFilePath, $newFilePath);
                    echo $_FILES['upload']['name'][$i] . ' успешно загружен в папку ' .
                        $uploadDir . '<br>';
                } else {
                    echo 'Файл ' . $_FILES['upload']['name'][$i] . ' уже существует!';
                }
            }
        }
    }

    ?>
    </form>
    <h2>Нет в наличии</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>category</th>
            <th>full_name</th>
            <th>year</th>
            <th>engine</th>
            <th>value_engine</th>
            <th>power</th>
            <th>cost_min</th>
            <th>cost_mid</th>
            <th>cost_max</th>
            <th>description</th>
        </tr>

        <?
        require_once("./controllers/connect.php");

        $query = "SELECT * FROM deleted";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        for (
            $data = [];
            $row = mysqli_fetch_assoc($result);
            $data[] = $row
        )
            ;
        $result = '';
        foreach ($data as $elem) {
            $result .= '<tr>';
            $result .= '<td>' . $elem['id'] . '</td>';
            $result .= '<td>' . $elem['name'] . '</td>';
            $result .= '<td>' . $elem['city'] . '</td>';
            $result .= '<td>' . $elem['category'] . '</td>';
            $result .= '<td>' . $elem['full_name'] . '</td>';
            $result .= '<td>' . $elem['year'] . '</td>';
            $result .= '<td>' . $elem['engine'] . '</td>';
            $result .= '<td>' . $elem['value_engine'] . '</td>';
            $result .= '<td>' . $elem['power'] . '</td>';
            $result .= '<td>' . $elem['cost_min'] . '</td>';
            $result .= '<td>' . $elem['cost_mid'] . '</td>';
            $result .= '<td>' . $elem['cost_max'] . '</td>';
            $result .= '<td>' . $elem['description'] . '</td>';
            // $result .= '<td><a href ="?del='. $elem['id'].'">Удалить</a></td>';
            $result .= '</tr>';
        }

        echo $result;

        ?>
    </table>

</body>

</html>