<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($order){
          $array = [15, 4, 18, 23, 10];
          
          /*if (条件式) {
          条件が成り立つときの処理
          } else {
          条件が成り立たないときの処理
          }*/

          if($order==true){
            echo '昇順にソートします。';
            echo '<br>';
          sort($array);
          foreach($array as $key => $value){
            echo $value .'<br>';
          }
          }else{
            echo '降順にソートします。';
            echo '<br>';
          rsort($array);
          foreach($array as $key => $value){
            echo $value .'<br>';
          }
          }
        }

        sort_2way (true);
        sort_2way (false);
        
        ?>
    </p>
</body>

</html>