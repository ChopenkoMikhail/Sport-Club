<?php

//    $connect = mysql polzovatili_sport_club.sql < ../SQL/polzovatili_sport_club.sql>
       $connect = mysqli_connect('localhost', 'root', '', 'polzovatili_sport_club');

    if (!$connect) {
        die('Error connect to DataBase');
    }