<?php
session_start();
include "db_info.php";
echo "<script>console.log('{$_SESSION['com1']} {$_SESSION['com2']} {$_SESSION['com3']}')</script>";
$_SESSION['result'] = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>야구게임</title>
    <link rel="stylesheet" href="./baseball.css">
    <script src="jquery-3.1.0.min.js"></script>
    
</head>
<body>
   <header>
   <div id="title">야구게임</div>
   </header>
   <section>
      <article>
      <div id="com">
       <div class="com1">?</div>
       <div class="com2">?</div>
       <div class="com3">?</div>
          </div>
          <div id="result">
             <?php
              $query = "SELECT * FROM baseball";
                $result = mysql_query($query);
               while($arr=mysql_fetch_array($result)){
               echo "$arr";
    }
              echo "숫자를 입력해주세요.";
              ?>
              </div>
              <form action="game_body.php" method="post">
          <div id="user">
        <input type="text" name="user1" class="user1" placeholder="0" maxlength="1" required>
        <input type="text" name="user2" class="user2" placeholder="0" maxlength="1" required>
        <input type="text" name="user3" class="user3" placeholder="0" maxlength="1" required>
        <div id="button">
         <input type="button" value="재시작" class="reset" onclick="game_reset()">
          <input type="submit" value="시작" class="start">
              </div>
          </div>
          </form>
          <script>
          function game_reset(){
            alert('게임을 재시작합니다.');
            location.href('game_reset.php');
          }
          </script>
   </article>
   </section>
   
   <footer>
       
   </footer>
   <script>
    $("#result").append("");
    </script>
</body>
</html>
