<!DOCTYPE html>
<html lang="UTF-8">

<head>
  <meta charset="UTF-8">
  <title>PHP課題016</title>
</head>

<body>
  <p>
    <?php
    class Food {
      // プロパティ
      private $name;
      private $price;

      // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

        //メソッド
      public function show_price(int $price) {
        echo $this->price. '<br>';
      }
    }

    class Animal {
      // プロパティ
      private $name;
      private $height;
      private $weight;

      // コンストラクタを定義する
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      // メソッド
      public function show_height(int $height) {
        echo $this->height. '<br>';
      }
    }

     // インスタンスFood
     $food = new Food('potato',250);

     // インスタンス$Foodの各プロパティの値を出力する print_r関数使用
     print_r($food);
     
     // 改行
     echo '<br>';

     // インスタンスAnimal
     $animal = new Animal('dog', 60, 5000);

     // インスタンス$Animalの各プロパティの値を出力する print_r関数使用
     print_r($animal);

     // 改行
     echo '<br>';

     // show_priceメソッド処理
     $food->show_price(250);

     // show_heightメソッド処理
     $animal->show_height(60);
     
    ?>
  </p>
</body>
  
</html>