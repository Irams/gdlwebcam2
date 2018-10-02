<?php

$conn = new mysqli('localhost','root' ,'maga_098','gdlwebcam');
  if($conn->connect_error){
    echo $error->$conn->connect_error;
  }
?>
