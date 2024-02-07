<?php

session_start();
$_SESSION['prod']=$_POST['prod'];
header('location:search1.php');
?>
