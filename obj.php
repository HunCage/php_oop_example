<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
</head>

<body>

    <h1>The fruit program</h1>

    <?php
        class Fruit {

            public $name;
            public $color;

            function set_name($name)
            {
                $this->name = $name;
            }

            function get_name()
            {
                return $this->name;
            }
        }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name('Apple');
        $banana->set_name('Banana');

        echo $apple->get_name();
        echo "<hr />";
        echo $banana->get_name();

    ?>

</body>

</html>