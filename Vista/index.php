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
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="pagina/fonts/fonts.css">
  <!--<link rel="stylesheet" href="pagina/css/style-index.css">-->
  <link rel="stylesheet" href="pagina/css/panel.css">
  <title>Agua Potable</title>
</head>
<body>
    <header>         
      <nav>
        <div class="titulo">
          <p>SIDESOFT BOLIVIA</p> 
        </div>
        <div class="menu">
          <a href="#" class="bt-menu list" title="menu"><span class="icono icon-menu"></span></a>
          <a href="#" class="bt-menu cerrar" title="cerrar"><span class="icono icon-log-out"></span></a>  
        </div>           
      </nav>
      <div class="main">
        <div class="menu2">
          <div class="contenedor-menu">
            <a href="#" class="btn-menu">Menu<span class="icono icon-menu"></span></a>
            <ul class="menu">
              <li><a hreft="#"><span class="icono izquierda icon-home"></span>Inicio</a></li>
              <li><a hreft="#">Productos<span class="icono derecha icon-chevron-down"></span></a>
                <ul>
                  <li><a href="#">Items </a></li>
                  <li><a href="#">Items </a></li>
                  <li><a href="#">Items </a></li>
                  <li><a href="#">Items </a></li>
                </ul>
              </li>
              <li><a hreft="#">item 3</a></li>
              <li><a hreft="#">item 4</a></li>
            </ul>
          </div>  
        </div>
        <div class="contenido">

        </div>
      </div>      
    </header>
<script src="Framework/jQuery/jquery-3.7.1.min.js"></script>
<script src="pagina/js/index.js"></script>
</body>
</html>