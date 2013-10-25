<a href="/proyecto4/formulario.php">Insert Usuario</a>
<table border=1>
<tr>
	<th>Id</th>
	<th>Nombre</th>
	<th>Email</th>
	<th>Password</th>
	<th>Direccion</th>
	<th>Telefono</th>
	<th>Descripcion</th>
	<th>Sexo</th>
	<th>Mascota</th>
	<th>Ciudad</th>
	<th>Idiomas</th>
	<th>Submit</th>
	<th>Photo</th>	
	<th>Options</th>	
</tr>
<?php 
//Leer los datos del archivo de texto en un string
$filename= $_SERVER['DOCUMENT_ROOT']."/proyecto4/usuarios.txt";
$data=file_get_contents($filename);
//Separar el string por lineas en un array (filas)
$filas = explode("\n", $data);
//Recorrar el array (filas)
foreach($filas as $key => $value)
{
	//Mostar las filas
	echo "<tr>";
		//Dividir el string de fila en un array (columnas)
		$columnas = explode(',', $value);
		//Recorrar el array (columnas)
		foreach($columnas as $key => $value)
		{
			if($key==sizeof($columnas)-1)
			{
				echo "<td>";
				echo "<img src=\"/proyecto4/uploads/".$value."\" width=100px />";
				echo "</td>";
			}
			else
			{
				//Mostrar las columnas
				echo "<td>";
				echo $value;
				echo "</td>";
			}
		}
		//Agregar Options al final
		echo "<td>";
		echo "<a href=\"#\">update</a>
				&nbsp;&nbsp;
			  <a href=\"#\">delete</a>
			";
		echo "</td>";		
	echo "</tr>";	
}
?>
</table>





