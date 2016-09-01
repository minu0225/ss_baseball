<?php
session_start();
if(empty($_SESSION['page'])){
include "game_start.php";
    echo "tjdrhd";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>야구게임</title>
    <link rel="stylesheet" href="./baseball.css">
</head>
<body>
  <form action="baseball.php" method="post">
   <header>
   <div id="title">야구게임</div>
   </header>
   <section>
      <article>
      <?php
          for(;;){
          $com1 = mt_rand(1,9);
          $com2 = mt_rand(1,9);
          $com3 = mt_rand(1,9);
          if($com1 != $com2 && $com1 != $com3 && $com2 != $com3){
          break;
          }
          }
          $_SESSION['com_1'] = $com1;
          $_SESSION['com_2'] = $com2;
          $_SESSION['com_3'] = $com3;
          echo"<script>console.log('$com1 $com2 $com3')</script>";
          ?>
      <div id="com">
       <div class="com1">?</div>
       <div class="com2">?</div>
       <div class="com3">?</div>
          </div>
          <div id="result">
             <?php
              if($_SESSION['strike'] != ""){
              echo "결과 :{$_SESSION['strike']}스트라이크";
              }
              else{
                  echo "숫자를입력하세요";
              }
              ?>
              </div>
          
          <div id="user">
        <input type="text" name="user1" class="user1" placeholder="0" maxlength="1">
        <input type="text" name="user2" class="user2" placeholder="0" maxlength="1">
        <input type="text" name="user3" class="user3" placeholder="0" maxlength="1">
        <div id="button">
         <input type="button" value="재시작" class="reset" onclick="reset()">
          <input type="submit" value="시작" class="start">
              </div>
          </div>
          <script>
          function reset(){
              location.href="game_reset.php";
            alert('게임을 재시작합니다.');
          }
          </script>
   </article>
   </section>
   
   <footer>
       
   </footer>
    </form>
</body>
</html>
