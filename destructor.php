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

        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }

        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }

        function set_color($color)
        {
            $this->name = $color;
        }

        function get_color()
        {
            return $this->color;
        }
    }

    $strawberry = new Fruit("Strawberry", "Red");

    echo $strawberry->get_name();
    echo "<hr />";
    echo $strawberry->get_color();

    ?>

</body>

</html>