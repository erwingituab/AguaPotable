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
    <link rel="stylesheet" href="./Framework/Bootstrap4/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./Framework/Bootstrap4/css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="./Framework/Bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="pagina/css/style-index.css">    
    <title>Agua Potable</title>
</head>
<body>
    <header>
      <div class="container">
        <div class="container"><img src="img/logo.jpg" width="60px" height="60px" alt="Logo"><h3>SERVICIO DE AGUA POTABLE</h3></div>
      </div>
    </header>
    <main>
      <div class="container">

      </div>
    </main>
    <footer><div class="container"></div></footer>
    <script src="./Framework//jQuery/jquery-3.7.1.min.js"></script>
    <script src="./Framework/Bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>