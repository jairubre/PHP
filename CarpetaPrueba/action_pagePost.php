<?php 

$usuario=htmlspecialchars($_POST["fusuario"]);
$contrasena=htmlspecialchars($_POST["fpassword"]);
$opcion=$_POST["tipo"];
$color=$_POST["color"];
$fecha=$_POST["cumple"];

echo "Estos son los datos de la opcion ".$opcion."<br>";
echo "Estos son los datos del usuario ".$usuario ."<br>";
echo "Estos son los datos de la contraseña ".$contrasena."<br>";
echo "Este es el color ".$color."<br>" ;
//Esto es para poner el color que hemos pillado del el formulario
echo 'Este es el color <span style="color: '. $color . ';">' . $color . '</span><br>';
echo "Esta es la fecha de tu cumpleaños ".$fecha;

?>
<!--Editamos el body del html desde el php para poner el color que hemos selecionado en formulario -->
<body style="background-color: <?php echo $color ?>;">
