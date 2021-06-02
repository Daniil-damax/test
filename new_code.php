
<?php

require_once 'connection.php';


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
    <input name="code" type="text" value="">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Расшифровка<br></label>
    <input name="Name_code" type="text" value="" >
    </p>
    <input type="submit" name="submit" value="Добавить">

</form>
<a href="admin.php">Вернуться назад</a>



  </body>
  </html>
<?php
$submit = $_POST['submit'];
if($submit) {
$code = $_POST['code']; $Name_code = $_POST['Name_code'];
$update_query = "INSERT INTO codes (Code,Name_code) VALUES ('$code', '$Name_code')";

$update_result = mysqli_query ($link, $update_query); 
}
?>