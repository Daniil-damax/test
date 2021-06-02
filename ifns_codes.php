
 <?php
 session_start();
$user_profile = $_SESSION['user_profile'];  

require_once 'connection.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином


 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Piccolo Theme</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS
================================================== -->
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]--> 

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.quicksand.js"></script>
<script src="js/jquery.custom.js"></script>

</head>

<body>
    <div class="color-bar-1"></div>
    <div class="color-bar-2 color-bg"></div>
    
    <div class="container">
    
      <div class="row header"><!-- Begin Header -->
      
        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
            <a href="index.htm"><img src="img/logo3.png"  alt="" /></a>
            <h5>Мы знаем все об ИП</h5>
        </div>
        
        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
            
            <ul class="nav">
            <li class="dropdown ">
                <a href="index.php">Главная </a>
              <!--   <ul class="dropdown-menu">
                    <li><a href="index.htm">Full Page</a></li>
                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                    <li><a href="index-slider.htm">Slider Only</a></li>
                </ul> -->
            </li>
           <li class="dropdown "><a href="news.php">Новости</a></li>
            <li >
                <a  href="zayav.php">Заявления </a>
               <!--  <ul class="dropdown-menu">
                    <li><a href="page-full-width.htm">Full Width</a></li>
                    <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                    <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                    <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                </ul> -->
            </li>
             <li class="dropdown">
                <a href="information.php">Полезная информация </a>
                <!-- <ul class="dropdown-menu">
                    <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                    <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                    <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                    <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                    <li><a href="gallery-single.htm">Gallery Single</a></li>
                </ul> -->
             </li>
             <li class="dropdown active">
                <a href="lk.php">Личный кабинет</a>
         <!--        <ul class="dropdown-menu">
                    <li><a href="blog-style1.htm">Blog Style 1</a></li>
                    <li><a href="blog-style2.htm">Blog Style 2</a></li>
                    <li><a href="blog-style3.htm">Blog Style 3</a></li>
                    <li><a href="blog-style4.htm">Blog Style 4</a></li>
                    <li><a href="blog-single.htm">Blog Single</a></li>
                </ul> -->
             </li>
<!--              <li><a href="page-contact.htm">Contact</a></li>
 -->            </ul>
           
            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                    <option value="index.php">Главная</option>
                    <option value="news.php">Новости</option>
                    <option value="zayav.php">Заявления</option>
                    <option value="information.php">Полезная информация</option>
                    <option value="vhod.php">Войти</option>
                </select>
                </div>
                </form>

        </div>
        
      </div><!-- End Header -->
     
    <!-- Page Content
    
    ================================================== --> 
<center>
    <h1>Список кодов ОКВЭД и ИФНС</h1>
</center>

    <div class="row">
        <form style="" name="search" method="post" action="">
    <input type="search" name="query" placeholder="Поиск">
    <button name="submit2" type="submit">Найти</button> 
</form>
<!-- ПОИСК------------------                 -->
<?php
if(isset($_POST['submit2'])){ 
    $query=$_POST['query'];
  $query = stripslashes($query);
    $query = htmlspecialchars($query);
    $query = trim($query); 


$result = mysqli_query($link,"SELECT * FROM codes WHERE Code='$query' OR Name_code = '$query'");
//   $row= mysqli_fetch_array($result);

// echo $row['id'];


    $rows = mysqli_num_rows($result); // количество полученных строк
     if(!empty($rows))
{
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

$result2 = mysqli_query($link,"SELECT * FROM ifns WHERE Number='$query' OR Adress = '$query' OR Telefon = '$query'");



    $rows = mysqli_num_rows($result2); // количество полученных строк
     if(!empty($rows)){
      echo "<table><tr><th>Номер</th><th>Адрес</th><th>Телефон</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result2);
        echo "<tr>";
            for ($j = 1 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result2);

}

}
?>
        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

           
<?php

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


//     if($result)
// {
    $rows = mysqli_num_rows($result); // количество полученных строк
     
    // echo "<table><tr><th>Id</th><th>usr</th><th>ifns</th><th>code</th></tr>";
    // for ($i = 0 ; $i < $rows ; ++$i)
    // {
        $row = mysqli_fetch_row($result);
//         echo "<tr>";
//             for ($j = 0 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
     
//     // очищаем результат
//     mysqli_free_result($result);
// }
  $result = mysqli_query($link,"SELECT login FROM userscards WHERE id = '$user_profile'");
  $row3= mysqli_fetch_array($result);
  $result4 = mysqli_query($link,"SELECT pass FROM userscards WHERE id = '$user_profile'");
  $row4= mysqli_fetch_array($result4);
  $result5 = mysqli_query($link,"SELECT FIO FROM userscards WHERE id = '$user_profile'");
  $row5= mysqli_fetch_array($result5);

    ?>


    
    
<br><br>


   <!--  -->

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
     
    echo "<table><tr><th>Номер</th><th>Адрес</th><th>Телефон</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 1 ; $j < 4 ; ++$j) echo "<td>$row[$j]</td>";
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
   
<!-- ПОИСК------------------                 -->
<?php
if(isset($_POST['submit2'])){ 
    $query=$_POST['query'];
  $query = stripslashes($query);
    $query = htmlspecialchars($query);
    $query = trim($query); 


$result = mysqli_query($link,"SELECT * FROM codes WHERE Code='$query' OR Name_code = '$query'");

if($result)
{

    $rows = mysqli_num_rows($result); // количество полученных строк
     
    echo "<table><tr><th>Код</th><th>Расшифровка</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
     
    // очищаем результат
    mysqli_free_result($result);
}
}


?>


        </div><!-- End gallery-single-->

    </div><!-- End container row -->


    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
        <!-- Footer Area
        ================================================== -->

    <div class="footer-container"><!-- Begin Footer -->
        <div class="container">
            <div class="row footer-row">
            <!--     <div class="span3 footer-col">
                    <h5>About Us</h5>
                   <img src="img/piccolo-footer-logo.png" alt="Piccolo" /><br /><br />
                    <address>
                        <strong>Design Team</strong><br />
                        123 Main St, Suite 500<br />
                        New York, NY 12345<br />
                    </address>
                    <ul class="social-icons">
                        <li><a href="#" class="social-icon facebook"></a></li>
                        <li><a href="#" class="social-icon twitter"></a></li>
                        <li><a href="#" class="social-icon dribble"></a></li>
                        <li><a href="#" class="social-icon rss"></a></li>
                        <li><a href="#" class="social-icon forrst"></a></li>
                    </ul>
                </div> -->
                <div class="span3 footer-col">
                    <h5>Последние статьи</h5>
                    <ul>
                        <li><a href="open_ip.php"></a> Сколько стоит открыть ИП?</li>
                       <li><a href="vid_del.php"></a> Как подобрать виды деятельности для ИП</li>
                       <li><a href="vrem_reg.php"></a> Как открыть ИП по временной регистрации</li>
                    </ul>
                </div>
                <div class="span3 footer-col">
                    <h5>Последние новости</h5>
                     <ul class="post-list">
                        <li><a href="news.php">Некоторым компаниям приходится платить за невозвратные кредиты</a></li>
                        <li><a href="news.php">Обновился порядок внесения изменений в реестры юрлиц и ИП</a></li>
                        <li><a href="news.php">Для ИП без работников могут вернуть вычет на ККТ</a></li>
                        <li><a href="news.php">ФНС снова чистит ЕГРЮЛ: кому стоит опасаться</a></li>
                        
                    </ul>
                </div>
               <!--  <div class="span3 footer-col">
                    <h5>Flickr Photos</h5>
                    <ul class="img-feed">
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                        <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    </ul>
                </div> -->
            </div>

            <div class="row"><!-- Begin Sub Footer -->
                <div class="span12 footer-col footer-sub">
                    <div class="row no-margin">
                        <div class="span6"><span class="left">Copyright 2021 All_About_IP. Все права защищены.</span></div>
                        <div class="span6">
                            <span class="right">
                            <a href="index.php">Главная</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="news.php">Новости</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="zayav.php">Заявления</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="information.php">Полезная информация</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="vhod.php">Войти</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- End Sub Footer -->

        </div>
    </div><!-- End Footer --> 
    
    <!-- Scroll to Top -->  
   <!--  <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div> -->

    
</body>
</html>
