<?php
//requiere que la extension SQLite de PHP este activa

$conexion = sqlite_open('directorio.db');
$consulta = "SELECT * FROM personal;";
$resultado = sqlite_query($conexion,$consulta);
while($fila = sqlite_fetch_array($resultado)){	
		if($fila['Nombre'] == $_GET['contacto']){
			echo "".$fila['Extension']."";
		}
	}
sqlite_close($conexion);
?>
