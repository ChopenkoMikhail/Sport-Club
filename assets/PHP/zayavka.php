<?php

    session_start();
    
    require_once 'conect_zayavka.php';


    $full_name = $_POST['full_name'];
    $vid_sporta = $_POST['vid_sporta'];
    $vozrast = $_POST['vozrast'];
    $number = $_POST['number'];


        
        
        
        
    $x = NULL;
        
    switch ($x) {
            
        case $full_name:
            
            if ($_SESSION['user']) {
            $_SESSION['messssage'] = 'Пожалуйста введите все данные';
            header('Location: ../../zapis_na_trenerovky__reg.html');
            } 

            else    {
                $_SESSION['messssage'] = 'Пожалуйста введите все данные';
                header('Location: ../../zapis_na_trenerovky.html');
            } 
            break;
            
        case $vid_sporta:
            
            if ($_SESSION['user']) {
            $_SESSION['messssage'] = 'Пожалуйста введите все данные';
            header('Location: ../../zapis_na_trenerovky__reg.html');
            } 

            else    {
                $_SESSION['messssage'] = 'Пожалуйста введите все данные';
                header('Location: ../../zapis_na_trenerovky.html');
            }
            break;
            
        case $vozrast:
            
            if ($_SESSION['user']) {
            $_SESSION['messssage'] = 'Пожалуйста введите все данные';
            header('Location: ../../zapis_na_trenerovky__reg.html');
            } 

            else    {
                $_SESSION['messssage'] = 'Пожалуйста введите все данные';
                header('Location: ../../zapis_na_trenerovky.html');
            }
            break;
            
        case $number:
            
            if ($_SESSION['user']) {
            $_SESSION['messssage'] = 'Пожалуйста введите все данные';
            header('Location: ../../zapis_na_trenerovky__reg.html');
            } 

            else    {
                $_SESSION['messssage'] = 'Пожалуйста введите все данные';
                header('Location: ../../zapis_na_trenerovky.html');
            }
            break;
            
        default: 
            
            mysqli_query($connect_zayavka, "INSERT INTO `zayavka` (`id`, `full_name`, `vid_sporta`, `vozrast`, `number`) VALUES (NULL, '$full_name', '$vid_sporta', '$vozrast', '$number')");

        if ($_SESSION['user']) {
            $_SESSION['messsage'] = 'Заявка успешно оставлена,<br>мы вам позвоним!';
            header('Location: ../../index__reg.html');
        } 

        else    {
            $_SESSION['messsage'] = 'Заявка успешно оставлена,<br> мы вам позвоним!';
            header('Location: ../../index.html');
        }
    } 

?>
