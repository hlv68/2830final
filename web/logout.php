<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pms']);
header ("Location:index.php") ;    //重新定向到其他页面
?>
