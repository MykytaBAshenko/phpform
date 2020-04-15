<?php

    session_start();
    require_once 'connect.php';
    include "lang/lang.php";

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "login" => $user['login'],
            "phone" => $user['phone'],
            "password" => $user['password'],
            "country" => $user['country']
        ];

        header('Location: ./profile.php');

    } else {
        $_SESSION['message'] = $lang['wrongpassorlog'];
        header('Location: ./index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
