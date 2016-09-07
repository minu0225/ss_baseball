<?php
session_start();
$_SESSION['result'] = 1;
include "db_info.php";
$strike=0;
$ball=0;
$out=0;
$u1=0;
$u2=0;
$u3=0;
$c1=0;
$c2=0;
$c3=0;
$_POST['user1']=$u1;
$_POST['user2']=$u2;
$_POST['user3']=$u3;
$_SESSION['com1']=$c1;
$_SESSION['com2']=$c2;
$_SESSION['com3']=$c3;
if($u1==$u2||$u1==$u3||$u2==$u3){
    $error = "잘못된 문자 혹은 같은 숫자를 입력하셨습니다";
    $sql="insert into baseball(result)";
    $sql="valuse('$error');";
}
if($c1==$u1 && $c1!=$u2 && $c1!=$u3 && $c2 != $u3){
$strike++;
}
if($c2==$u2 && $c1!=$u2 && $c1!=$u3 && $c2 != $u3){
    $strike++;
}
if($c3==$u3 && $c1!=$u2 && $c1!=$u3 && $c2 != $u3){
    $strike++;
}
if($c1!=$u2 && $c1!=$u3 && $c2!=$u3 && $c1!=$u1){
    $out++;
}
if($c1!=$u2 && $c1!=$u3 && $c2!=$u3 && $c2!=$u2){
    $out++;
}
if($c1!=$u2 && $c1!=$u3 && $c2!=$u3 && $c3!=$u3){
    $out++;
}
if($c1!=$u1 && $c2!=$u2 && $c3!=$u3 && $c1==$u2){
    $ball++;
}
if($c1!=$u1 && $c2!=$u2 && $c3!=$u3 && $c1==$u3){
    $ball++;
}
if($c1!=$u1 && $c2!=$u2 && $c3!=$u3 && $c2==$u3){
    $ball++;
}
$result = "$strike 스트라이크, $ball 볼, $out 아웃";
    $sql="insert into baseball(result)";
    $sql="valuse('$result');";
include "startpage.php";
?>