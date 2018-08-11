<?php

include("../config/conexion.php");
require("../funciones/funciones.php");
if(!empty($_POST['cedula']) && !empty($_POST['clave']))
{
	$cedula=$_POST['cedula'];
	$password=$_POST['clave'];
	
	$consulta_usuario=pg_query("SELECT * FROM usuarios WHERE cedula='$cedula' AND password='$password' AND estatus_logico=TRUE");
	if (pg_num_rows($consulta_usuario)!=0) {
		$consulta_actividad=pg_query("SELECT * FROM usuarios WHERE cedula='$cedula'");
		//$consulta_actividad=pg_query("SELECT * FROM usuarios WHERE cedula='$cedula' AND actividad=false");
		if(pg_num_rows($consulta_actividad)!=0){
			session_start();
			$resultado_usuario=pg_fetch_array($consulta_usuario);
			$primer_nombre=$resultado_usuario['primer_nombre'];
			$primer_apellido=$resultado_usuario['primer_apellido'];
			$cedula=$resultado_usuario['cedula'];
			$tipo_usuario=$resultado_usuario['tipo_usuario'];
			$fecha_nacimiento=$resultado_usuario['fecha_nacimiento'];
			$maquina_ip = recibirIPReal();
			$edad = calcularEdad($fecha_nacimiento);
			pg_query("UPDATE usuarios SET edad='$edad',fecha_ultima_conexion='now()',hora_ultima_conexion='now()',
						actividad = true,ip_equipo_conexion = '$maquina_ip'
						WHERE cedula='$cedula'");
			//Variables SESSION
			$_SESSION['primer_nombre']=$primer_nombre;
			$_SESSION['primer_apellido']=$primer_apellido;
			$_SESSION['cedula']=$cedula;
			$_SESSION['tipo_usuario']=$tipo_usuario;
			$_SESSION['acceso']='loco1234';
				
			echo "<meta http-equiv='refresh' content='0;URL=../view/inicio.php'>";
		}
		else{
			
		echo"<meta http-equiv='refresh' content='0;URL=../index.php?error=u'>";
		}
		
	}
	else{
		echo"<meta http-equiv='refresh' content='0;URL=../index.php?error=e'>";
	}
}
?>