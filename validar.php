<?php
session_start();

include 'conexion/conexion.php';


@$username=$_POST['username'];
@$password=$_POST['password'];



//$conexion=mysqli_connect("localhost","root","","cefa");

$consulta="SELECT * FROM usuarios where username='$username' and password='$password'";



$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);


if($filas['id_cargo']==1){ //administrador
header("location:admin.php");
$_SESSION['nombre'] = $filas['nombre'];
}else
if($filas['id_cargo']==2){ //secretaria
header("location:empleado.php");
$_SESSION['nombre'] = $filas['nombre'];
}else
	{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

