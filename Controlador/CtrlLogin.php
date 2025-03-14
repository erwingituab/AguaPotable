<?php
if (isset($_POST['usuario'])&&isset($_POST['clave'])) 
{
	echo CtrlLogin::Ingresar();
}
class CtrlLogin
{
    static public function MotrarLogin()
    {
        include "Vista/pagina/Login.php";
    }
    static public function Ingresar()
    {
        require_once "../Modelo/MdlLogin.php";
		$table 		= "usuario";
		$usuario 	= array("usuario"=>$_POST['usuario'],
							"clave"=>md5($_POST['clave']));
		$respuesta = MdlLogin::Ingresar($table,$usuario);
		if ($respuesta != null) 
		{			
			if ($respuesta['status']==1)
			{
				session_start();
				$_SESSION['active']		= true;
				$_SESSION['idUsuario'] 	= $respuesta['idUsuario'];
				$_SESSION['ci'] 		= $respuesta['ci'];
				$_SESSION['nombre'] 	= $respuesta['nombre'];				
				$_SESSION['telefono'] 	= $respuesta['telefono'];
				$_SESSION['direccion'] 	= $respuesta['direccion'];
				$_SESSION['usuario'] 	= $respuesta['usuario'];
				$_SESSION['status'] 	= $respuesta['status'];
				$_SESSION['RolId'] 		= $respuesta['RolId'];
				return 1;
			}
			else 
			{
				return 2;
			}
		}
		else
		{
			return 0;
		}
    }
}