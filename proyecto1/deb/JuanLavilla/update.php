
<a href="usuarios.php?action=select">Listar usuarios</a>

<LINK href="css/estilos.css" rel="stylesheet" type="text/css">


<form action="usuarios.php?action=insert" method="post" enctype="multipart/form-data">

<ul>
	<li>
		Id: <input type="text" name="id" value="<?=$userData[0]?>"/> 
	</li>
	
	<li>
		Nombre: <input type="text" name="nombre" value="<?=$userData[1]?>"/> 
	</li>
	
	<li>
		Email: <input type="text" name="email" value="<?=$userData[2]?>"/> 
	</li>
	
	<li>
		Password: <input type="text" name="password" value="<?=$userData[3]?>"/> 
	</li>
	
	<li>
		Direccion: <input type="text" name="direccion" value="<?=$userData[4]?>"/> 
	</li>
	
	<li>
		Tel&eacute;fono: <input type="text" name="telefono" value="<?=$userData[5]?>"/> 
	</li>
	
	<li>
		Descripci&oacute;n: <input type="text" name="descripcion" value="<?=$userData[6]?>"/> 
	</li>
	
	<li>
		Foto: <input type="file"  name="foto"/>
	</li>
	
	<li>
		Sexo: 
		<?php $mSelect="unchecked";$hSelect="unchecked";$oSelect="unchecked";
			  if ($userData[7]=='m') $mSelect="checked"; 
		      else if ($userData[7]=='h') $hSelect="checked";
		      else if ($userData[7]=='o') $oSelect="checked";
		      else { $mSelect="unchecked";$hSelect="unchecked";$oSelect="unchecked";}?>
		M <input type="radio" name="sexo" value="m" <?=$mSelect?>/>
		H <input type="radio" name="sexo" value="h" <?=$hSelect?>/> 
		O <input type="radio" name="sexo" value="o" <?=$oSelect?>/>
	</li>
	
	<li>
		Mascota:
		<?php $pSelect="unchecked";$gSelect="unchecked";$dSelect="unchecked";
			  if (strstr($userData[8],"perro")!=false) $pSelect="checked"; 
		      if (strstr($userData[8],"gato")!=false) $gSelect="checked";
		      if (strstr($userData[8],"dinosaurio")!=false) $dSelect="checked";
		      ?>
		Perro <input type="checkbox" name="mascota[]" value="perro" <?=$pSelect?>/>
		Gato <input type="checkbox" name="mascota[]" value="gato" <?=$gSelect?>/>
		Dinosaurio <input type="checkbox" name="mascota[]" value="dinosaurio" <?=$dSelect?>/>
	</li>
	
	<li>
		Ciudad:
		
		<?php
			  $op1Select="";$op2Select="";
			  if ($userData[9]=='zgz') $op1Select="selected"; 
			  if ($userData[9]=='bcn') $op2Select="selected";
		 ?>
		<select name="ciudad" >
			<option value="zgz" <?=$op1Select?>> Zaragoza </option>
			<option value="bcn" <?=$op2Select?>> Barcelona </option>		
		</select>
	</li>
	
	<li>
		Idiomas:
		<?php $ingSelect="";$franSelect="";$rusoSelect="";
			  if (strstr($userData[10],"ingles")!=false) $ingSelect="selected"; 
		      if (strstr($userData[10],"frances")!=false) $franSelect="selected";
		      if (strstr($userData[10],"ruso")!=false) $rusoSelect="selected";
		      ?>
		<select multiple="multiple" name="idioma[]">
			<option value="ingles" <?=$ingSelect?>> Ingles </option>
			<option value="frances" <?=$franSelect?>> Franc&eacute;s </option>
			<option value="ruso" <?=$rusoSelect?>> Ruso </option>			
		</select>
	</li>	



</ul>
	<input type="submit" value="Enviar">


</form>

