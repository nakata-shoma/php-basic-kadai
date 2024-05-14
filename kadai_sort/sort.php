<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく

        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($array, $order){

            if($order == TRUE){
                // 昇順にソートする
                sort($array);

                // 表示する
                echo "昇順にソートします";
                echo "<br>";
                // print_r($array);
                foreach ($array as $key => $val) {
                    echo "$val"."<br>";
                }
            }else{
                // 降順にソートする
                rsort($array);

                // 表示する
                echo "降順にソートします";
                echo "<br>";
                // print_r($array);
                foreach ($array as $key => $val) {
                    echo "$val"."<br>";
                }
            }
        }

        sort_2way($nums,FALSE)
        ?>
    </p>
</body>

</html>