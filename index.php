<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>야구게임</title>
    <link rel="stylesheet" href="./baseball.css">
</head>
<body>
  <form action="game_start.php" method="post">
   <header>
   <div id="title">야구게임</div>
   </header>
   <section>
      <article>
      <?php
          $com1 = mt_rand(1,9);
          $com2 = mt_rand(1,9);
          $com3 = mt_rand(1,9);
          $_SESSTION['com_1'] = $com1;
          $_SESSTION['com_2'] = $com2;
          $_SESSTION['com_3'] = $com3;
          echo"<script>console.log('$com1 $com2 $com3')</script>"
          ?>
      <div id="com">
       <div class="com1">?</div>
       <div class="com2">?</div>
       <div class="com3">?</div>
          </div>
          <div id="result">
             <?php
              echo "$strike";
              ?>
              </div>
          
          <div id="user">
        <input type="text" name="user1" class="user1" placeholder="0">
        <input type="text" name="user2" class="user2" placeholder="0">
        <input type="text" name="user3" class="user3" placeholder="0">
        <div id="button">
         <input type="button" value="재시작" class="reset" onclick="reset()">
          <input type="submit" value="시작" class="start">
              </div>
          </div>
          <script>
          function reset(){
              
          }
          </script>
   </article>
   </section>
   
   <footer>
       
   </footer>
    </form>
</body>
</html>
