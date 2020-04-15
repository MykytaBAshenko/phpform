<?php

    session_start();
    require_once 'connect.php';
    include "lang/lang.php";
    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $login = mysqli_real_escape_string($connect, $_POST['login']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $country = mysqli_real_escape_string($connect, $_POST['country']);
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        if(!preg_match("!image!", $_FILES['avatar']['type'])){
            $_SESSION['message'] = $lang["imgerror"] ;
            header('Location: ./register.php');
            exit;
        }
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $path)) {
            $_SESSION['message'] = $lang["uploaderror"];
            header('Location: ./register.php');
            exit;
        }
        $password = md5($password);
        $query = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' || email = '$email'");
        if (mysqli_num_rows($query)> 0) {
            $_SESSION['message'] = $lang['creationfail'];
            header('Location: ./register.php');
            exit;
        }
        else {
            mysqli_query($connect, "INSERT INTO `users` 
            (`id`, `full_name`, `login`, `email`, `password`, `avatar`,`phone`,`country`) 
            VALUES 
            (NULL, '$full_name', '$login', '$email', '$password', '$path','$phone','$country')");
            $_SESSION['message_success'] = $lang["registrationsuccess"];
            header('Location: ./index.php');
            exit;
        }
    }
    else {
        $_SESSION['message'] =  $lang['passworddismatch'];
        header('Location: ./register.php');
        exit;
    }