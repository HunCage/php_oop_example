<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Destructor</title>
</head>

<body>

    <h1>The fruit program</h1>

    <?php

    class Fruit
    {
        public $name;
        public $color;

        public function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        public function intro()
        {
            echo "A {$this->name} and the color of the fruit is {$this->color}.";
        }
    }

    class Cherry extends Fruit
    {
        public $weight;

        public function __construct($name, $color, $weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro()
        {
            echo "This fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight}gram.";
        }
    }

    $cherry = new Cherry("Cherry Loveberry ", "Red", 800);
    $cherry->intro();

    ?>

</body>

</html>