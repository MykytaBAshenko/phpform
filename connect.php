<?php

    $server = '127.0.0.1';
    $username = "mysql";
    $pass = "mysql";
    $tablename = "1";
    $connect = mysqli_connect('127.0.0.1', 'mysql', 'mysql', '1');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>