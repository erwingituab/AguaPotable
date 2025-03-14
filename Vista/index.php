<?php 
session_start();
if ($_SESSION['active']==true) 
{
   	$saludo     = "Bienvenido";
	$idusuario  = $_SESSION['idUsuario'];
	$ci         = $_SESSION['ci'];
	$nombre     = $_SESSION['nombre'];	
    $telefono   = $_SESSION['telefono'];	
    $direccion  = $_SESSION['direccion'];	
	$usuario    = $_SESSION['usuario'];
	$status     = $_SESSION['status'];
    $rol        = $_SESSION['RolId'];	
    $rolnombre  = '';
  if($rol==1)
  {
    $rolnombre = "Administrador";
  }
  if($rol==2)
  {
    $rolnombre = "Veterinario";
  }
  if($rol==3)
  {
    $rolnombre = "Productor";
  }
}
else
{
	session_destroy ();
	header ('location:../../');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  echo $saludo;?>
</body>
</html>