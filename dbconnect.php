<?php
    // Указываем кодировку
    header('Content-Type: text/html; charset=utf-8');
 
    $server = "localhost"; // имя хоста (уточняется у провайдера), если работаем на локальном сервере, то указываем localhost
    $username = "username"; // Имя пользователя БД
    $password = ""; // Пароль пользователя. Если у пользователя нету пароля то, оставляем пустое значение ""
    $database = "football_bd"; // Имя базы данных, которую создали
     
    $mysqli = new mysqli($server, $username, $password, $database);
 
    if ($mysqli->connect_errno) { 
        die("<p><strong>Ошибка подключения к БД</strong></p><p><strong>Код ошибки: </strong> ". $mysqli->connect_errno ." </p><p><strong>Описание ошибки:</strong> ".$mysqli->connect_error."</p>"); 
    }
 
    $mysqli->set_charset('utf8');
 
    //Для удобства, добавим здесь переменную, которая будет содержать адрес (URL) нашего сайта
    $address_site = "http://ebpusg.ru";
?>