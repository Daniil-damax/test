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
            <li class="dropdown active">
                <a href="index.php">Главная </a>
              <!--   <ul class="dropdown-menu">
                    <li><a href="index.htm">Full Page</a></li>
                    <li><a href="index-gallery.htm">Gallery Only</a></li>
                    <li><a href="index-slider.htm">Slider Only</a></li>
                </ul> -->
            </li>
           <li><a href="news.php">Новости</a></li>
            <li class="dropdown">
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
             <li class="dropdown">
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

            <div class="row">
                <div class="span6">
                    <img src="img/slider/1.jpg" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>Как подобрать виды деятельности для ИП</h2>
                    
                    <p>При государственной регистрации будущей предприниматель должен заявить, чем именно он планирует заниматься. Подходящие виды деятельности ИП подбирает в специальном документе — классификаторе ОКВЭД. Но нужно знать, что в определенных сферах вести бизнес могут только юридические лица, предпринимателю это запрещено. Также есть деятельность, осуществлять которую можно только после получения дополнительных разрешений или лицензий. Кроме того, выбор кодов ОКВЭД может повлиять на налоги и взносы, что в итоге скажется на доходе предпринимателя. Давайте разберемся, как ИП действовать при выборе видов деятельности, и какие в этом смысле есть ограничения. </p>
                    <p class="lead">Классификатор деятельности</p>
                    <p>Каждый будущий ИП знает, каким видом бизнеса он будет заниматься. Но во время регистрации об этом нужно сообщить Налоговой службе. Для этого предприниматель должен выбрать конкретную деятельность, включенную в Общероссийский классификатор видов экономической деятельности. Этот классификатор утвержден приказом Росстандарта от 31 января 2014 года № 14-ст и официально именуется ОК 029-2014 (КДЕС Ред. 2). Но для простоты его обычно называют ОКВЭД или ОКВЭД-2, поскольку сейчас действует его вторая редакция. Из ОКВЭД надо выбрать основной вид деятельности ИП, а при необходимости и несколько дополнительных. Эти коды нужно вписать в заявление о регистрации предпринимателя по форме Р21001, утвержденной приказом ФНС от 31.08.2020 № ЕД-7-14/617@ и вступившей в силу 25 ноября 2020 года. Закон никак не ограничивает ИП в выборе направлений деятельности по их количеству. Вовсе не обязательно заниматься сразу всем, что выбрано, поэтому можно указать коды ОКВЭД в расчете на будущее. Но и лишние коды также выбирать ни к чему. Впоследствии виды деятельности можно будет расширить или заменить, подав в ИФНС форму Р24001. Сделать это нужно в течение 3 дней после того, как ИП начал заниматься новой деятельностью.</p>
                    
<!--                
                    <button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                    <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a> -->
                </div>
            </div>

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
