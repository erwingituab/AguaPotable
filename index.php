<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vista/Framework/Bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="Vista/Pagina/css/style.css">
    <title>Login</title>
</head>
<body style="max-height: 100vh !important;">
<?php
    require "Controlador/CtrlLogin.php";
    $mostrar = CtrlLogin::MotrarLogin();
    echo $mostrar;?>
    <script src="Vista/Framework/jQuery/jquery-3.7.1.min.js"></script>
    <script src="Vista/Framework/Bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>