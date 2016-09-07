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
   <form action="startpage.php" method="post">
    <div id="warp">
     <div id="title">신나는 야구게임</div>
     <input type="submit" name="start_button" value="시작" id="start_button">
    </div>
    <?php
    for(;;){
    $_SESSION['com1'] = mt_rand(1,9);
    $_SESSION['com2'] = mt_rand(1,9);
    $_SESSION['com3'] = mt_rand(1,9);
        if($_SESSION['com1'] != $_SESSION['com2'] && $_SESSION['com1'] != $_SESSION['com3'] && $_SESSION['com2'] != $_SESSION['com3']){
            break;
        }
    }
    echo "<script>console.log('{$_SESSION['com1']} {$_SESSION['com2']} {$_SESSION['com3']}')</script>";
    ?>
    </form>
</body>
</html>