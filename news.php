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
           <li class="dropdown active"><a href="news.php">Новости</a></li>
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
                    <img src="img/news1.jpg" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>Некоторым компаниям приходится платить за невозвратные кредиты</h2>
                    
                    <p>Многие бизнесмены, взявшие «пандемийные» кредиты, в апреле 2021 года получили из банков сообщения о списании всех сумм, поскольку сохранили свой штат. Но некоторые столкнулись с проблемами. Об этом рассказал предприниматель Михаил Кузнецов, общественный представитель бизнес-омбудсмена Республики Татарстан.</p>
                    <p>Он отметил, что получить кредит было легко. Однако в декабре 2020 года в Сбербанке сообщили, что бизнес Кузнецова выведен из программы господдержки. Основание – снижение численности сотрудников, хотя штат компании остался прежним.</p>
                    <p>Оказалось, что некоторые работодатели не подали вовремя отчеты по форме СЗВ-М либо неверно их заполнили. Однако в постановлении Правительства, которым утверждена мера поддержки в виде невозвратного кредита, не сказано о необходимости представлять какие-либо отчеты. В Сбербанке же говорят о том, что списывать кредиты в таких ситуациях им не дают внутренние регламенты, а также требования ФНС. Предприниматели решают сложившуюся ситуацию по-разному. Одни заключают с банком дополнительные соглашения к договорам, другие собираются обращаться в суд. Продолжая банковскую тему, приведем итоги исследования Тинькофф Бизнес. Компании и ИП, чьи счета были заблокированы, в качестве основных причин этого назвали налоговую задолженность и перевод средств на счет физического лица, в том числе собственный. При этом 65% респондентов ни разу не сталкивались с проблемой блокировки счетов за последние 2 года. 11% субъектов малого и 24% субъектов среднего бизнеса хотя бы раз получили от банка требование предоставить пояснения или документы по подозрительной операции (это право дает банкам закон № 115-ФЗ). Решить этот вопрос в основном удавалось в течение нескольких дней, а в 20% случаев – в течение 1-2 недель.</p>
                    
<!--                
                    <button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                    <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a> -->
                </div>
            </div>


    

            <div class="row">
                <div class="span6">
                    <img src="img/news2.jpg" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>Обновился порядок внесения изменений в реестры юрлиц и ИП</h2>
                    
                    <p>Вступил в силу новый порядок регистрации некоторых изменений, которые вносятся в ЕГРЮЛ и ЕГРИП. Организациям больше не нужно отслеживать изменение названия юрлица, являющегося ее участником или лицом, которое вправе действовать от ее имени без доверенности. После того как такая компания обновит информацию о себе в реестре, в течение 5 дней она будет изменена в реестровых записях иных связанных с ней юрлиц. ФНС внесет все изменения автоматически.</p>
      
                    <p>В таком же порядке в реестр будут вноситься и изменения, связанные с реорганизацией компании-учредителя. Кроме того, автоматически будут меняться в ЕГРЮЛ сведения об организационно-правовой форме организации при их смене. Еще одно новшество касается срока, в течение которого компании и ИП должны уведомлять регистрирующий орган об изменении сведений в реестре. Внести их путем предоставления соответствующих документов необходимо в течение семи рабочих дней с даты изменений, а не трех, как было ранее. Также на днях ФНС пояснила, как правильно действовать в ситуации, когда была приостановлена государственная регистрация. Если заявитель считает, что это неправомерно, он может обжаловать действия регистрирующего органа. Куда именно подается жалоба, зависит от того, кто принял решение о приостановке. Если это руководитель инспекции, то на его действия можно пожаловаться в региональное Управление ФНС. Если решение принято иным должностным лицом налогового органа, то обжаловать его можно в этой же инспекции. В любом случае подобные жалобы не стоит подавать в центральный аппарат ФНС, поскольку он не уполномочен их рассматривать. Жалоба может быть подана в электронной форме – в таком случае ее следует подписать электронной подписью. Можно подать обращение и через представителя. Если он действует по доверенности, то ее необходимо приложить к жалобе. Если заявитель имеет право действовать от имени организации без доверенности (директор), то к жалобе следует приложить копию решения либо приказа о назначении этого лица на должность.</p>
                    
<!--                
                    <button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                    <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a> -->
                </div>
            </div>



      <div class="row">
                <div class="span6">
                    <img src="img/news3.jpg" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>Для ИП без работников могут вернуть вычет на ККТ</h2>
                    
      
                    <p>Уполномоченный по правам предпринимателей Борис Титов в письме премьер-министру Михаилу Мишустину предложил вернуть кассовый вычет для ИП, которым была дана отсрочка по применению ККТ до 1 июля 2021 года. При внедрении онлайн-касс в 2017-2019 годах некоторым категориям предпринимателей была предоставлена возможность вычесть стоимость аппаратов в пределах 18 тыс. рублей из своих налогов. Это дало им возможность сделать переход на новый порядок работы менее затратным. Вместе с тем для ИП, которые не используют наемный труд и не занимаются торговлей или общепитом, предусматривалась отсрочка по применению онлайн-касс до 1 июля текущего года. Борис Титов считает, что данной категории налогоплательщиков также необходимо предоставить вычет на установку ККТ. Это представители самого малого бизнеса, к тому же многие из них ведут деятельность в сферах, признанных наиболее пострадавшими от коронавирусных ограничений. Существует риск, что необходимость новых затрат заставит некоторых ИП уйти в тень. Вычет позволит этого избежать и простимулирует предпринимателей внедрить онлайн-кассы. По подсчетам бизнес-омбудсмена отмена отсрочки затронет около 500-600 тысяч предпринимателей. При сумме вычета 20 тыс. рублей расходы бюджета на его внедрение составят 10-12 млрд рублей. Добавим, что работать без кассовых аппаратов после 1 июля 2021 года вправе ИП: применяющие налоговый режим НПД; покупающие патенты на определенную деятельность; занимающиеся деятельностью, которая попадает под исключения закона «О ККТ». Поскольку отмена отсрочки касается ИП без наемных работников, не занимающихся торговлей, многие из них могут стать плательщиками НПД и не применять кассовую технику.</p>
                    
<!--                
                    <button class="btn btn-inverse pull-left" type="button">Visit Website</button>
                    <a href="#" class="pull-right"><i class="icon-arrow-left"></i>Back to Gallery</a> -->
                </div>
            </div>


 



      <div class="row">
                <div class="span6">
                    <img src="img/news4.jpg" class="align-left thumbnail" alt="image">
                </div>
                <div class="span6">
                    <h2>ФНС снова чистит ЕГРЮЛ: кому стоит опасаться</h2>
                    
      
                    <p>Налоговая служба проводит работу по исключению из ЕГРЮЛ организаций, которые считает недействующими. Но в этот список иногда попадают и работающие компании. Право налоговых органов исключить юрлицо из реестра по своему решению закреплено в статье 21.1 НК РФ. Организация может быть признана недействующей, если она в течение последних 12 месяцев: не подавала отчетности; не проводила операций по банковским счетам (хотя бы по одному из них). При одновременном выполнении этих условий компанию могут признать недействующей и ликвидировать. Кроме того, пунктом 5 указанной статьи для этого предусмотрено еще одно основание: наличие в ЕГРЮЛ недостоверных сведений в течение более шести месяцев с даты внесения записи о них. Такая запись может быть внесена в отношении адреса компании, ее руководителя или участника. Суть в следующем. ИФНС вправе проверить достоверность сведений о компании, которые содержатся в госреестре, например, ее адрес. Если выяснится, что он недостоверный, налоговый орган должен направить в организацию, ее директору и участникам сообщение с предложением обновить информацию или подтвердить документами, что она актуальна. На практике же такое сообщение доходит не всегда. В итоге в ЕГРЮЛ появляется запись о недостоверности сведений, и по прошествии полугода юрлицо может быть из него исключено. Поэтому бизнесу необходимо следить за тем, чтобы в госреестре фигурировала актуальная информация. Кроме того, важно отслеживать появление записи о недостоверности сведений в отношении своих контрагентов. Добавим, что одно из последствий насильственной ликвидации компании таково: если у нее остались долги, собственники бизнеса могут быть привлечены к субсидиарной ответственности без процедуры банкротства.</p>
                    
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
