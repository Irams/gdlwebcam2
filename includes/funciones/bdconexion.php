<?php

$conn = new mysqli('localhost','root' ,'soptec098','gdlwebcam');
  if($conn->connect_error){
    echo $error->$conn->connect_error;
  }
?>
