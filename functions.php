<?php
$leftCard = $_POST["leftCard"];
$select = $_POST["select"];
$cards = array("JK.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$rightCard = mt_rand(0,13);

if ($leftCard < $rightCard){
    $result = "High";
}else if ($leftCard > $rightCard){
    $result = "Low";
}else{
    $result = $select;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High&Low</title>
</head>
<body>
  　<h1 style="text-align:center">High&Lowゲーム</h1>
  <hr>
  <p style="text-align:center">
  　<?php echo '<img src="../cards/',$cards[$leftCard],'">';?>
  　<?php echo '<img src="../cards/',$cards[$rightCard],'">';?>
  </p>
  　<p style="text-align:center"><?php echo $select; ?>を選択しました。</p>
    <p style="text-align:center"> 
    <?php
    if($result==$select){
        echo "You Win!";
        }else{
        echo "You Lose...";
        }
     ?>
     <p style="text-align:center"><a href="highAndLowS03.php">もう一度挑戦</a></p>
    </p>
</body>
</html>
