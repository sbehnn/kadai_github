<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       class Food{
        public $name,$price;
        public function show_price(string $name){
          $this->name = $name
        public function __contruct(string $name, int $price){
          $this->name = $name;
          $this->price - $price;
        }
        }
       }

       class Animal{
        public $name,$height,$weight;
        public function show_height(string $height)
         $this->name = $height
        public function __contruct(string $name, int $height, string $weight){
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
       }

      $food = new  Food('potato',250);
      print_r($food);

      $animal = new Animal('dog',60,5000);
      print_r($animal);

       ?>
   </p>
</body>
</html>