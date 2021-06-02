<?php
 // подключаемся к базе
   require_once 'connection.php';




 

    $result = mysqli_query($link,"
SELECT
  id,
  (SELECT FIO FROM userscards WHERE id = alluserscards.ID_User),
(SELECT Adress FROM ifns WHERE id = alluserscards.ID_IFNS),
  (SELECT Name_code FROM codes WHERE id = alluserscards.ID_Code)
FROM
  alluserscards;
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
 
    
    ?>
    <html>
    <head>
    <title>вход</title>
    </head>
    <body>
    <h2>вход</h2>
    <form action="prov_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>
 
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Войти">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>
    </html>