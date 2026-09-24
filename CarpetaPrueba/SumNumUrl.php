<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        

        $num1=htmlspecialchars($_GET['num']);
        $num2=htmlspecialchars($_GET['num2']);
        //El punto concatena
        $suma=$num1.$num2;

        echo"Esto es la suma de los numeros ".$suma;
    
    
    
    
    ?>
</body>
</html>