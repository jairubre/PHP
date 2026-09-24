<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $x=10; $y=20; // ámbito global

        function ambito() {
        $x=1; $y=2; // ámbito local a la función
        echo"Variables locales a la función: <br>";
        echo"x = $x <br>"; echo"y = $y <br>";
        global $x, $y; // Llama al valor de la variable global
        echo"Variables globales: <br>";
        echo"x = $x <br>"; echo"y = $y <br>";
        }

        ambito();
        ?>
</body>
</html>