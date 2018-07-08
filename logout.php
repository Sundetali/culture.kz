<?php 

  require 'db.php';

  if($conn -> connect_error){ 
    die("connection failed");
  }
  unset($_SESSION['login']);

  header("Location: /project/index.php");
?>
