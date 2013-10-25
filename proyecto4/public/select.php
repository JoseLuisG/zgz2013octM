<a href="/usuarios.php?action=insert">Insert Usuario</a>
<table border=1>
<tr>
<th>Id</th> <th>Nombre</th>
<th>Email</th> <th>Password</th>
<th>Direccion</th> <th>Telefono</th>
<th>Descripcion</th> <th>Sexo</th>
<th>Mascota</th> <th>Ciudad</th>
<th>Idiomas</th> <th>Submit</th>
<th>Photo</th> <th>Options</th>
</tr>
<?php foreach($users as $key => $user): ?>
	<tr>
		<?php foreach($user as $key => $value):?>
			<td><?=$value;?></td>
		<?php endforeach; ?>
		<td>
			<a href="#">update</a>
			&nbsp;&nbsp;
		  	<a href="#">delete</a>
		</td>
	</tr>
<?php endforeach;?>
</table>


		