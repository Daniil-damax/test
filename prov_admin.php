<?php
    

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
$role2=2;
$role3=3;

 // подключаемся к базе
 require_once 'connection.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT id FROM userscards WHERE login='$login' AND pass='$password' AND role='$role2'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        
         header ('Location: admin_lk.php');  // перенаправление на нужную страницу
   exit();
    }
    else{
        header ('Location: lk_manager.php');
           
exit();
    }

    ?>