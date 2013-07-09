<?php
/*

Database:	u96157_pruebasphp
Host:	localhost
Username:	u96157_pruebas
Password:	Pruebas2012

*/
class conectarBD
{
	public static function conectarse(){
		$conexionSQL = mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("visitas");
		return $conexionSQL;
	}
}

class operacionesBD
{
	private $registrovisitas;
	
	public function __construct(){
		$this->registrovisitas = array();
	}
	
	public function consultarVisitas(){
		$consulta = "SELECT * FROM librovisitas ORDER BY fecha DESC";
		$resultado = mysql_query($consulta,conectarBD::conectarse());
		
		if($consulta)
		{
			while($registro = mysql_fetch_assoc($resultado)){
			$this->registrovisitas[]=$registro;
			}
			return $this->registrovisitas;
		}
		else
		{
			echo "Error: ".mysql_errno().
			     " ".mysql_error();
			die;
		}
	}
	
	public function registrarVisitas($nombre,$mensaje){
		$consulta = "INSERT INTO librovisitas values (null,'$nombre','$mensaje', now())";
		
		$resultado = mysql_query($consulta,conectarBD::conectarse());
		
		if(!$resultado)
		{
			echo "Error no se ingresaron los datos: ".mysql_errno().
			     " ".mysql_error();
			die;
		}
		else {
			echo "gracias por tu comentario";
			//sleep(5);
			//header("Location: index.php");
		}
		
	}
}

?>