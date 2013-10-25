<form action="usuarios.php?action=insert" method="POST"
 enctype="multipart/form-data">
<ul>
	<li>
		Id: <input type="hidden" name="id" value="1"/>
	</li>
	<li>
		Nombre: <input type="text" name="name"/>
	</li>
	<li>
		Email: <input type="text" name="email"/>
	</li>
	<li>
		Password: <input type="password" name="password"/>
	</li>
	<li>
		Direccion: <input type="text" name="address"/>
	</li>
	<li>
		Telefono: <input type="text" name="phone"/>
	</li>
	<li>
		Descripcion: <textarea name="description"></textarea>
	</li>
	<li>
		Foto: <input type="file" name="photo"/>
	</li>
	<li>
		Sexo: 
		M: <input type="radio" name="gender" value="m"/>
		H: <input type="radio" name="gender" value="h"/>
		O: <input type="radio" name="gender" value="o"/>
	</li>
	<li>
		Mascota: 
		Perro: <input type="checkbox" name="pet[]" value="dog"/>
		Gato: <input type="checkbox" name="pet[]" value="cat"/>
		Anguila: <input type="checkbox" name="pet[]" value="eel"/>
	</li>
	<li>
		Ciudad: <select name="city">
			<option value="zgz">Zaragoza</option>
			<option value="bcn">Barcelona</option>
			<option value="bib">Bilbao</option>
		</select>
	</li>
	<li>
		Idiomas: <select multiple name="languages[]">
			<option value="eng">Ingles</option>
			<option value="esp">Español</option>
			<option value="dut">Holandes</option>
		</select>		
	</li>
	<li>
		Submit: <input type="submit" name="submit" value="Enviar"/>
	</li>
	<li>
		Reset: <input type="reset" name="reset"/>
	</li>
	<li>
		Boton: <input type="button" name="button" value="Boton"/>
	</li>

</ul>



</form>
