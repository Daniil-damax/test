
<?php
require_once 'connection.php';

$login=$_POST['login'];
$password=$_POST['password'];
$fio=$_POST['fio'];
$code=$_POST['code'];
$ifns=$_POST['ifns'];
$user_id=$_POST['user_id'];
 $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $login = trim($login);

     $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $password = trim($password);

     $fio = stripslashes($fio);
    $fio = htmlspecialchars($fio);
    $fio = trim($fio);

$code = stripslashes($code);
    $code = htmlspecialchars($code);
    $code = trim($code);

   $ifns = stripslashes($ifns);
    $ifns = htmlspecialchars($ifns);
    $ifns = trim($ifns);
   $user_id = stripslashes($user_id);
    $user_id = htmlspecialchars($user_id);
    $user_id = trim($user_id);

echo $user_id;
$role=1;
$result = mysqli_query ($link,"UPDATE userscards SET
  login='$login',
  pass='$password',
  FIO='$fio',
  role='$role'
  WHERE id='$user_id'; ");
$res1 = mysqli_query ($link,"SELECT id FROM codes WHERE Name_code = '$code'");
$res2 = mysqli_query ($link,"SELECT id FROM ifns WHERE Adress = '$ifns'");
$result1 = mysqli_query ($link,"UPDATE alluserscards SET
  ID_Code=(SELECT id FROM codes WHERE Name_code = '$code'),
  ID_IFNS=(SELECT id FROM ifns WHERE Adress = '$ifns')
  WHERE ID_User='$user_id'; ");
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <p> Все данные успешно обновлены!</p>
<a href="lk.php">Вернуться назад</a>
</body>
</html>



