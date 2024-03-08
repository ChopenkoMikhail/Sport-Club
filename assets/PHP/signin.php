<?php

    session_start();
    require_once 'conect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
        
        $_SESSION['message'] = 'Добро пожаловать!';
        header('Location: ../../SLAIDER__reg.HTML');

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../../vhod.html');
    }
?>
    
   
  
 <pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>