<?php
session_start();
$user_profile = $_SESSION['user_profile'];  
echo $user_profile;
 // подключаемся к базе
  require_once 'connection.php';




    
    $result = mysqli_query($link,"
SELECT
  id,
  (SELECT FIO FROM userscards WHERE id = alluserscards.ID_User),
(SELECT Adress FROM ifns WHERE id = alluserscards.ID_IFNS),
  (SELECT Name_code FROM codes WHERE id = alluserscards.ID_Code)
FROM
  alluserscards
WHERE ID_User='$user_profile';

");


    if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Id</th><th>usr</th><th>ifns</th><th>code</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
  $result = mysqli_query($link,"SELECT login FROM userscards WHERE id = '$user_profile'");
  $row3= mysqli_fetch_array($result);
  $result4 = mysqli_query($link,"SELECT pass FROM userscards WHERE id = '$user_profile'");
  $row4= mysqli_fetch_array($result4);
  $result5 = mysqli_query($link,"SELECT FIO FROM userscards WHERE id = '$user_profile'");
  $row5= mysqli_fetch_array($result5);

    ?>

    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
    </head>
    <body>
    
    
    <h1>Личный кабинет</h1>

    <form action ="mod.php "method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<input type="hidden" name="user_id" value="<?php echo  $user_profile ?>">

<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15" value="<?php echo "$row3[0]"; ?>">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="text" size="15" maxlength="15" value="<?php echo "$row4[0]"; ?>">
    </p>
    <p>
    <label>Ваше ФИО:<br></label>
    <input name="fio" type="text" size="35" maxlength="35" value="<?php echo "$row5[0]"; ?>">
    </p>
      <label>Ваш Код ОКВЭД:<br></label>

      
  
   
    <p>
<?php 
$result10 = mysqli_query($link,"SELECT Code FROM codes WHERE Name_code = '$row[3]'");

  $row10= mysqli_fetch_array($result10);

?>
<select name="code" id="loads">
  <option  value="<?php echo "$row[3]";?>"><?php printf("Код ОКВЭД %s %s", $row10[0], $row[3]);?></option>
<?php 
  $result = mysqli_query($link,"SELECT Code,Name_code FROM codes");
    
while($ri = mysqli_fetch_array($result)) {

 ?>
<option value="<?php echo $ri['Name_code'] ?>"><?php printf("Код ОКВЭД %s %s", $ri['Code'], $ri['Name_code']) ?></option>

<?php } ?>
</select>
    </p>
    <label>Ваша ИФНС:<br></label>
    <p>

      <?php
$result11 = mysqli_query($link,"SELECT Number FROM ifns WHERE Adress = '$row[2]'");

  $row11= mysqli_fetch_array($result11);

       ?>
        <select name="ifns" id="ifns">
            <option  value="<?php echo "$row[2]";?>"><?php printf("ИФНС, Межрайонная инспекция Федеральной налоговой службы России № %s %s", $row11['Number'], $row[2]);?></option>
<?php
$result2 = mysqli_query($link,"SELECT Number,Adress FROM ifns");
 while($ri = mysqli_fetch_array($result2)) { ?>
<option value="<?php echo $ri['Adress'] ?>"><?php printf("ИФНС, Межрайонная инспекция Федеральной налоговой службы России № %s %s", $ri['Number'], $ri['Adress']); ?></option>

<?php } ?>
</select>

    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Изменить" >
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
<h3>Адреса ИНФС</h3>
<?php
   
    $result = mysqli_query($link,"
SELECT *
FROM
  ifns;

");
    if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Номер</th><th>Адрес</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 1 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
?>

<h3>Коды ОКВЭД</h3>

<?php

    $result = mysqli_query($link,"
SELECT *
FROM
  codes;

");
    if($result)
{
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Код</th><th>Расшифровка</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 1 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}

?>
</body>
    </html>

