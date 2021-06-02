

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
    
   <!--  -->
     
    <!-- Page Content
    ================================================== --> 
    <div class="row">

        <!-- Gallery Items
        ================================================== --> 
        <div class="span12 gallery-single">
<a href="index.php"><h4><u>Выйти</u></h4></a>

           
<center>
           <h1>Личный кабинет менеджера</h1>
</center>
<h3>Адреса ИНФС</h3>
<?php

  
$query ="SELECT * FROM ifns";
?>
   <a href="new_ifns.php">Добавить новую ИФНС</a>
<?php
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    while ($det = mysqli_fetch_array($result)){?>
        <br>
        <table style="width:100%;">
            <tr style="font-weight: bold;">
                <td>Id</td>
                <td>№</td>
                <td>Адрес</td>
                <td>Телефон</td>
                <td> </td>
            </tr>
            <tr>
                <td style="width:20%;">
                    <?php echo $det['id'], "";?>
                </td>
                <td style="width:20%;">
                    <?php echo $det ['Number'], "";?>
                </td>
                <td style="width:20%;">
                    <?php echo $det ['Adress'], "";?>
                </td>
                <td style="width:20%;">
                    <?php echo $det ['Telefon'], "";?>
                </td>
                 <td style="width:20%;">
<a href="edit_ifns.php?det=<?php echo $det['id']?>">Исправить</a>
                </td>
            </tr>
        </table>


        <?php
    }


    $det = $_GET['det'];
    // $select_db = mysqli_select_db($link, $db);
    // $query = "SELECT * FROM ifns WHERE id = $det";
    // $result = mysqli_query($link, $query);
    // $delete_note = mysqli_fetch_array($result);

}
?>


<h3>Коды ОКВЭД</h3>

<?php
$query ="SELECT * FROM codes";
?>
<a href="new_code.php">Добавить новый код</a>
<?php
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    while ($det = mysqli_fetch_array($result)){?>
        
        <br>
        <table style="width:100%;">
            <tr style="font-weight: bold;">
                <td>Id</td>
                <td>Код</td>
                <td>Расшифровка</td>
                <td></td>
            </tr>
            <tr>
                <td style="width:25%;">
                    <?php echo $det['id'], "";?>
                </td>
                <td style="width:25%;">
                    <?php echo $det ['Code'], "";?>
                </td>
                <td style="width:25%;">
                    <?php echo $det ['Name_code'], "  ";?>
                </td>
                <td style="width:25%;">
<a href="edit_codes.php?det=<?php echo $det['id']?>">Исправить</a>
                </td>
            </tr>
        </table>


        <?php
    }


    $det = $_GET['det'];
    // $select_db = mysqli_select_db($link, $db);
    // $query = "SELECT * FROM ifns WHERE id = $det";
    // $result = mysqli_query($link, $query);
    // $delete_note = mysqli_fetch_array($result);

}
?>










        </div><!-- End gallery-single-->

    </div><!-- End container row -->


    </div> <!-- End Container -->

    <!-- Footer Area
        ================================================== -->
        <!-- Footer Area
        ================================================== -->

    
    <!-- Scroll to Top -->  
   <!--  <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div> -->

    
</body>
</html>
