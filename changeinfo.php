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
    $id = $_SESSION['user']['id'];
    $var = false;

    if( $_FILES['avatar']['type'] != "") {
        if(!preg_match("!image!", $_FILES['avatar']['type'])){
            $_SESSION['message'] = $lang["imgerror"];
            header('Location: ./newinfo.php');
            exit;
        }
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], './' . $path)) {
            $_SESSION['message'] = $lang['uploaderror'];
            header('Location: ./newinfo.php');
            exit;
        }
        unlink ($_SESSION['user']['avatar']);
        mysqli_query($connect, "UPDATE users
        SET avatar='$path'
        WHERE id='$id'");
        $_SESSION['user']['avatar'] = $path;
        $var = true;
    }
    if ($login != "") {
        $query = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login'");
        if (mysqli_num_rows($query)> 0) {
            $_SESSION['message'] = $lang["loginmess"];;
            header('Location: ./newinfo.php');
            exit;
        } 
        mysqli_query($connect, "UPDATE users
        SET login='$login'
        WHERE id='$id'");
        $_SESSION['user']['login'] = $login;
        $var = true;
    }
    
    if ($email != "") {
        $query = mysqli_query($connect, "SELECT * FROM users WHERE email = '$email'");
        if (mysqli_num_rows($query)> 0) {
            $_SESSION['message'] = $lang["emailmess"];;
            header('Location: ./newinfo.php');
            exit;
        } 
        mysqli_query($connect, "UPDATE users
        SET email='$email'
        WHERE id='$id'");
        $_SESSION['user']['email'] = $email;
        $var = true;
    }
    if ($phone != "") {
        mysqli_query($connect, "UPDATE users
        SET phone='$phone'
        WHERE id='$id'");
        $_SESSION['user']['phone'] = $phone;
        $var = true;
    }
    if ($country != "") {
        mysqli_query($connect, "UPDATE users
        SET country='$country'
        WHERE id='$id'");
        $_SESSION['user']['country'] = $country;
        $var = true;
    }
    if ($full_name != "") {
        mysqli_query($connect, "UPDATE users
        SET full_name='$full_name'
        WHERE id='$id'");
        $_SESSION['user']['full_name'] = $full_name;
        $var = true;
    }
    if ($password == $password_confirm && $password != ""){
        $password = md5($password);
        mysqli_query($connect, "UPDATE users
        SET password='$password'
        WHERE id='$id'");
        $_SESSION['user']['password'] = $password;
        $var = true;
    }
    else if ($password != "" ) {
        $_SESSION['message'] = $lang["passworddismatch"];
    }
    if ($var == true) {
        $_SESSION['message_success'] = $lang["successmesininfochng"];
    }
    header('Location: ./newinfo.php');

