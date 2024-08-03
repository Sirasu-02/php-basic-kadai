<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          
        
          //関数の宣言
          function sort_2way($oder) {

            $nums = [15, 4, 18, 23, 10 ];  //配列

            if ($oder === '昇順') {
              echo '昇順にソートします。<br>';

              sort($nums);
              foreach ($nums as $array) {
                echo $array.'<br>';
              }

            }

            else {
              echo '降順にソートします。<br>';

              rsort($nums);
              foreach ($nums as $array) {
                echo $array.'<br>';
              }
            }
          }

          //関数を呼び出す
          sort_2way('昇順');

          sort_2way('降順');

        ?>
    </p>
</body>

</html>
