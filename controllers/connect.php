<?php 

    $host = 'localhost';
    $name = 'root';
    $password = '';
    $db_name = 'database';

    $link = mysqli_connect($host,$name,$password,$db_name);

    if ($link == false) {
        {
           echo"Ошибка подключения";
        }
    }
?>