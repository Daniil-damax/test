<?php
 // подключаемся к базе
   require_once 'connection.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT * FROM alluserscards join userscards on alluserscards.ID_User = userscards.id;
");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
         header ('Location: 1.php');  // перенаправление на нужную страницу
   exit();
    }
    else{
            exit ("Извините, неверный логин или пароль");

    }
    ?>