<?php
session_start();
$_SESSION['page'] = 1;
$_SESSION['strike'] = 0;
$ball = 0;
$out = 0;
if($_SESSTION['com_1']= $_POST['user1']){
$_SESSION['strike'] = $_SESSION['strike'] + 1;
}
if($_SESSTION['com_2']= $_POST['user2']){
$_SESSION['strike'] = $_SESSION['strike'] + 1;
}
if($_SESSTION['com_2']= $_POST['user2']){
$_SESSION['strike'] = $_SESSION['strike'] + 1;
}
if($_SESSION['strike'] != ""){
echo"<script>console.log('{$_SESSION['strike']}')</script>";
}
include "index.php";
?>