<?php
    
session_start();
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);

 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);



 // подключаемся к базе
 $host = 'localhost'; // адрес сервера 
$database = 'ip1'; // имя базы данных
$user = 'root'; // имя пользователя
$pass = 'root'; // пароль
     $link = mysqli_connect($host, $user, $pass, $database) 
    or die("Ошибка " . mysqli_error($link));// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT id FROM userscards WHERE login='$login' AND pass='$password'  ");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        $_SESSION['user_profile'] = $myrow['id'];
         header ('Location: lk.php');  // перенаправление на нужную страницу
   exit();
    }
    else{
            exit ("Извините, неверный логин или пароль");

    }

    ?>