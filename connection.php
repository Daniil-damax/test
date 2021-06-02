 <?php 
 $host = 'localhost'; // адрес сервера 
$database = 'hmelenokdy'; // имя базы данных
$user = 'hmelenokdy'; // имя пользователя
$pass = 'Helenadan2001'; // пароль
     $link = mysqli_connect($host, $user, $pass, $database) 
    or die("Ошибка " . mysqli_error($link));// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    ?>