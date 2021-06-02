<?php
require_once 'connection.php';
  $det = $_GET['det'];
      
$query ="DELETE FROM ifns WHERE id='$det'";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{

echo "string";
    }


  


?>