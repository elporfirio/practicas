<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Libro de Visitas // desarrollado by elporfirio.com</title>
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="contenido">
	<div id="area_formulario">
    <h2>Gracias por tus comentarios</h2>
    <form action="registrar.php" method="post" name="formulario_visitas">
          <label>Nombre:</label>
          <input name="nombre_visitante" type="text">
          <br><br>
          <label>Mensaje:</label>
      <textarea name="mensaje_visitante" cols="40" rows="5"></textarea>
          <br><br>
		  <label for="txtCaptcha">¿humano?</label>
		  <input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="10" size="32" />
		  <br>
			<img id="imgCaptcha" src="create_image.php" style="margin-left: 40%"/>
			<br><br>
          <input type="submit" class="boton" id="boton" value="enviar comentario">
    </form>
    </div>
    <br><br>
    <div id="area_comentarios">
      <table>
        <h2>Comentarios anteriores</h2>
        <thead>
        <tr>
          <th width="20%" scope="col">Nombre</th>
          <th width="66%" scope="col">Mensaje</th>
          <th width="14%" scope="col">Fecha</th>
        </tr>
        </thead>
        <tbody>
        <?php
		require_once("clases.php");
		
		$mostrarcomentarios = new operacionesBD;
		$registros = $mostrarcomentarios->consultarVisitas();
		
		for($i=0; $i<count($registros); $i++)
		{
        ?>
        <tr>
    		<td><?php echo $registros[$i]['nombre']; ?></td>
    		<td><?php echo $registros[$i]['comentario']; ?></td>
    		<td align="center"><?php echo $registros[$i]['fecha']; ?></td>
        </tr>
        <?php
		}
		?>
        </tbody>
      </table>      
    </div>
   <p class="creditos">Desarrollado by <a href="http://www.elporfirio.com">elporfirio.com</a> en base a <a href="http://www.cesarcancino.com">Cesar Cancino</a></p>
</div>

</body>
</html>