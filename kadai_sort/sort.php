<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
          
        
          $nums = [15, 4, 18, 23, 10 ];  //配列
          

          //関数の宣言
          function sort_2way($array, $oder) {

            

            if ($oder === 'TRUE') {
              echo '昇順にソートします。<br>';

              sort($array);
              foreach ($array as $num) {
                echo $num.'<br>';
              }

            }

            else {
              echo '降順にソートします。<br>';

              rsort($array);
              foreach ($array as $num) {
                echo $num.'<br>';
              }
            }
          }

          //関数を呼び出す
          sort_2way($nums,'TRUE');

          sort_2way($nums,'FALSE');

        ?>
    </p>
</body>

</html>
