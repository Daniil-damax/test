
<?php
require_once 'connection.php';
    $det = $_GET['det'];

  $result = mysqli_query($link,"SELECT Number,Adress FROM ifns WHERE id = '$det'");
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
    <label>Номер ИФНС<br></label>
    <input name="Number" type="text" value="<?php  echo "$row[0]";?>">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Название ИФНС<br></label>
    <input name="Adress" type="text" value="<?php  echo "$row[1]";?>" >
    </p>
    <input type="submit" name="submit" value="Изменить">

</form>
<a href="admin.php">Вернуться назад</a>



  </body>
  </html>
<?php
$number = $_POST['Number']; $adress = $_POST['Adress'];
$update_query = "UPDATE ifns SET Number ='$number', Adress = '$adress'
WHERE id = $det";

$update_result = mysqli_query ($link, $update_query); ?>