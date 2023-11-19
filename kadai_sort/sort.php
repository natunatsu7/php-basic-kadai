<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP課題</title>
</head>

<body>
    <p>
        <?php
        // 関数定義
        //$array：ソート対象の配列, $order：ソート方向
        function sort_2way($array, $order) {
          // TRUE = 昇順(sort), FALSE = 降順(rsort)
          if ($order === TRUE) {
              echo '昇順にソートします. <br>';
              sort($array);
          } else {
              echo '降順にソートします. <br>';
              rsort($array);
          }
      
          foreach ($array as $array) {
              echo $array . '<br>';
          }
      }
      
      // この関数をテストするための例
      $num = [15, 4, 18, 23, 10 ];
      // 昇順ソート
      sort_2way($num, TRUE);

      //改行
      echo '<br>';

      // 降順ソート
      sort_2way($num, FALSE); 
        ?>
    </p>
</body>

</html>