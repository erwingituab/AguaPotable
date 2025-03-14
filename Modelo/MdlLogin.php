<?php
require "MdlConexion.php";
class MdlLogin
{
    static public function Ingresar($tabla,$usuario)
    {
        $ConexionBD = new ConexionBD();
		$conexion 	= $ConexionBD->Abrir();
		$query 		= mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario='".$usuario['usuario']."' AND clave='".$usuario['clave']."' ");
		$respuesta 	= mysqli_num_rows($query);
		
		if ($respuesta > 0) 
		{
			$usuario = mysqli_fetch_assoc($query);
			return $usuario;
		}
		else
		{
			return null;
		}
    }
}