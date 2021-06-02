
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
    <label>Номер ИФНС<br></label>
    <input name="number" type="text" value="">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Адрес<br></label>
    <input name="adress" type="text" value="" >
    </p>
    <input type="submit" name="submit" value="Добавить">

</form>
<a href="admin.php">Вернуться назад</a>



  </body>
  </html>
<?php
$submit = $_POST['submit'];
if($submit) {
$number = $_POST['number']; $adress = $_POST['adress'];
$update_query = "INSERT INTO ifns (Number,Adress) VALUES ('$number', '$adress')";

$update_result = mysqli_query ($link, $update_query); 
}
?>