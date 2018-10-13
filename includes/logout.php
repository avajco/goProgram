<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ../pages/login.php");
    exit();
}else{
if($_POST['logout']== 0){
  session_unset();
  session_destroy();
  header("Location: ../pages/login.php?logout=loged_out");
  exit();
}
}
?>