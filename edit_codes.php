
<?php
require_once 'connection.php';
    $det = $_GET['det'];

  $result = mysqli_query($link,"SELECT Code,Name_code FROM codes WHERE id = '$det'");
  $row= mysqli_fetch_array($result);
?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  
 <form method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Код<br></label>
    <input name="code" type="text" value="<?php  echo "$row[0]";?>">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Расшифровка<br></label>
    <input name="Name_code" type="text" value="<?php  echo "$row[1]";?>" >
    </p>
    <input type="submit" name="submit" value="Изменить">

</form>
<a href="admin.php">Вернуться назад</a>



  </body>
  </html>
<?php
$code = $_POST['code']; $Name_code = $_POST['Name_code'];
$update_query = "UPDATE codes SET Code ='$code', Name_code = '$Name_code'
WHERE id = $det";

$update_result = mysqli_query ($link, $update_query); ?>