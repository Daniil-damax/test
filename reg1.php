 <?php
 require_once 'connection.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT Code,Name_code FROM codes");
    $result2 = mysqli_query($link,"SELECT Number,Adress FROM ifns");

 ?>
 <html>
 
    <head>
    <title>Регистрация</title>
    </head>
    <body>
    <h2>Регистрация</h2>

    <form action="save_user.php" method="post">
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
    <p>
    <label>Ваше ФИО:<br></label>
    <input name="fio" type="text" size="35" maxlength="35">
    </p>
    <p>

<select name="code" id="loads">
<?php while($ri = mysqli_fetch_array($result)) { ?>
<option value="<?php echo $ri['Name_code'] ?>"><?php printf("Код ОКВЭД %s %s", $ri['Code'], $ri['Name_code']) ?></option>

<?php } ?>
</select>
    </p>
    <p>
        <select name="ifns" id="ifns">
<?php while($ri = mysqli_fetch_array($result2)) { ?>
<option value="<?php echo $ri['Adress'] ?>"><?php printf("ИФНС, Межрайонная инспекция Федеральной налоговой службы России № %s %s", $ri['Number'], $ri['Adress']); ?></option>

<?php } ?>
</select>

    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
    </body>
    </html>