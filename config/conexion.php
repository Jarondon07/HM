<?php
	
    $host="192.168.0.110";
    $port="5432";
    $user="jose";
    $pass="123456";
    $dbname="HOSPITAL_MILITAR";

    $conexion = pg_connect("host=$host dbname=$dbname user=$user password=$pass port=$port")
    			 or die('No se ha podido conectar: ' . pg_last_error());
    
    /*if(!$conexion){
        echo "<p><i>No hay conexion a la base de datos ''HOSPITAL_MILITAR''</i></p>";
    }
    else{
        echo "<p><i>Si hay conexion</i></p>";
    }*/

   

?>
