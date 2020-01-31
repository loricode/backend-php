
<?php

class Conexion {
	
 public function getConexion(){
   $host = "localhost"; //127.0.0.1 0 localhost
   $db = "dbempleado"; //base de datos de mysql
   $usuario = "root"; // usuario de mysql
   $clave = "";       //contraseña de mysql

//conexion a la base datos utilizando pdo
 $db = new PDO("mysql:host=$host;dbname=$db;", $usuario, $clave);

  return $db;
}

}

?>