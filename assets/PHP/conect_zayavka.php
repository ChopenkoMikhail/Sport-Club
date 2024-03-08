<?php

    $connect_zayavka = mysqli_connect('localhost', 'root', '', 'zayavki_sport_club');

    if (!$connect_zayavka) {
        die('Error connect to DataBase');
    }