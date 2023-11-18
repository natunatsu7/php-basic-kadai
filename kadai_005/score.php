<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP課題005</title>
</head>

<body>
  <p>
    <?php

    //配列の作成
    $score = [80,60,55,40,100,25,80,95,30,60];

    //合計の変数
    $total = array_sum($score);

    //配列の数の変数を作成 要素数10
    $count = count($score);

    //平均点の変数
    $age = $total / $count;

    //平均点の出力
    echo $age;

    ?>
  </p>
</body>    

</html>
