<?php

    session_start();
    
//    $connect = require_once '../SQL/polzovatili_sport_club.sql';
require_once 'conect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

$x = NULL;
        
    switch ($x) {
            
        case $full_name:
            
            $_SESSION['message'] = 'Пожалуйста введите все данные';
            header('Location: ../../registraciya.html');
            break;
            
        case $login:
            
            $_SESSION['message'] = 'Пожалуйста введите все данные';
            header('Location: ../../registraciya.html');
            break;
             
        case $email:
            
            $_SESSION['message'] = 'Пожалуйста введите все данные';
            header('Location: ../../registraciya.html');
            break;
            
        case $password:
            
            $_SESSION['message'] = 'Пожалуйста введите все данные';
            header('Location: ../../registraciya.html');
            break;
            
        default: {
    
        if ($password === $password_confirm) {

           if  ($_FILES['avatar']['name'] != NULL) {

            $path = 'assets/images/avatarki/' . time() . $_FILES['avatar']['name'];
                if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../../' . $path)) {
                    $_SESSION['message'] = 'Ошибка при загрузке фотографии';
                    header('Location: ../../registraciya.html');
            }
            } 
            else { $path = 'assets/images/avatarki/!no_foto.png';
            }

            $password = md5($password);

            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

            $_SESSION['message'] = 'Регистрация прошла успешно!';
            header('Location: ../../vhod.html');


        } else {
            $_SESSION['message'] = 'Пароли не совпадают!';
            header('Location: ../../registraciya.html');
        }
    }
    }
    
?>