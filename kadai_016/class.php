<?php
declare(strict_types=1);
?>
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

        class Food {
            public $name;
            public $price;

            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price(){
                echo $this->price . '<br>';
            }
        }

        class Animal {
            public $name;
            public $height;
            public $weight;
            
            public function __construct(string $name, int $height, float $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height(){
                echo $this->height . '<br>';
            }
        }

        $rice = new Food("rice", 500);
        print_r($rice);
        echo '<br>';

        $cat = new Animal("neko", 50, 5.8);
        print_r($cat);
        echo '<br>';

        $rice->show_price();
        $cat->show_height();

        ?>
    </p>
</body>

</html>