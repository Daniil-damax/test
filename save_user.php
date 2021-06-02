<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    if (isset($_POST['fio'])) { $fio=$_POST['fio']; if ($fio =='') { unset($fio);} }
    if (isset($_POST['code'])) { $code=$_POST['code']; if ($code =='') { unset($code);} }
    if (isset($_POST['ifns'])) { $ifns=$_POST['ifns']; if ($ifns =='') { unset($ifns);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password) or empty($fio)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $fio = stripslashes($fio);
    $fio = htmlspecialchars($fio);
      $code = stripslashes($code);
    $code = htmlspecialchars($code);
     $ifns = stripslashes($ifns);
    $ifns = htmlspecialchars($ifns);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
     $fio = trim($fio);
     $code = trim($code);
     $ifns = trim($ifns);
 // подключаемся к базе
  require_once 'connection.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT id FROM userscards WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $role =1;
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query ($link,"INSERT INTO userscards (login,pass,FIO,role) VALUES('$login','$password','$fio','$role')");
    $result3 = mysqli_query ($link,"INSERT INTO alluserscards (ID_User,ID_IFNS,ID_Code) VALUES(
        (SELECT id FROM userscards WHERE login = '$login'),
        (SELECT id FROM ifns WHERE Adress = '$ifns'),
        (SELECT id FROM codes WHERE Name_code = '$code')
        )");

    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>