
 <?php
 require_once 'connection.php';// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
    $result = mysqli_query($link,"SELECT Code,Name_code FROM codes");
    $result2 = mysqli_query($link,"SELECT Number,Adress FROM ifns");

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
                <a href="vhod.php">Войти</a>
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
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">

           


    
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
