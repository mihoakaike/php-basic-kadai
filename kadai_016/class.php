<html lang="ja">
 
    <head>
     <meta charset="UTF-8">
    </head>
     
    <body>
    <p>
        <?php
        class Food {
            // プロパティの定義
            private $name;
            private $price;

            // メソッドの定義
            public function show_price(){
                echo $this->price .'<br>';
            }

            // コンストラクタの定義
            public function __construct(string $name, int $price){
                $this->name =$name;
                $this->price =$price;
            }
        }
        // インスタンス化
        $potato = new Food('Potato',250);

        class Animal {
            // プロパティの定義
            private $name;
            private $height;
            private $weight;

            // メソッドの定義
            public function show_height(){
                echo $this->height .'<br>';
            }

            // コンストラクタの定義
            public function __construct(string $name, int $height, int $weight){
                $this->name = $name;
                $this->height =$height;
                $this->weight =$weight;
            }
        }
        // インスタンス化
        $dog =new Animal('dog',60,5000);

        print_r($potato);
        echo '<br>';

        print_r($dog);
        echo '<br>';
        
        $potato->show_price();
        $dog->show_height();
        ?>
    </p>
    </body>
 
 </html>