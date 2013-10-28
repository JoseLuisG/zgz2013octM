<?php
// Si al abrir el formulario tengo $_GET hago la consulta al fichero y relleno los values
if(isset($_GET['id']))
{
        $action = "update";
        require_once ("../model/users/usersModel.php");
        $users = readUsersFromFile();
        foreach($users as $key => $user)
        {
                foreach($user as $key => $value)
                {
                        if($key == 0 && $value == $_GET['id'])
                        {
                                $id= $user[0];
                                $name= $user[1];
                                $email= $user[2];
                                $password= $user[3];
                                $address= $user[4];
                                $phone= $user[5];
                                $description= $user[6];
                                $sexo= $user[7];
                                //$photo= $user[12];
                                
                                switch ($sexo)
                                {
                                        case 'm':
                                                $S1 = "checked";
                                                $S2 = "";
                                                $S3        = "";
                                                break;
                                        case 'h':
                                                $S1 = "";
                                                $S2 = "checked";
                                                $S3 ="";
                                                break;
                                        case 'o':
                                                $S1 = "";
                                                $S2 = "";
                                                $S3 = "checked";
                                                break;
                                }
                        
                        }
                }
        } 
        
}else{
        $action = "insert";
        $id="";
        $name="";
        $email="";
        $password="";
        $address="";
        $phone="";
        $description="";
        $photo="";        
}

?>


<form action="/usuarios.php?action=<?=$action?>" method="POST" enctype="multipart/form-data">
<ul>
        <li>
                Id: <input type="hidden" name="id" value="<?=$id?>" />
        </li>
        <li>
                Nombre: <input type="text" name="name" value="<?=$name?>" />
        </li>
        <li>
                Email: <input type="text" name="email" value="<?=$email?>" />
        </li>
        <li>
                Password: <input type="password" name="password" value="<?=$password?>" />
        </li>
        <li>
                Direccion: <input type="text" name="address" value="<?=$address?>" />
        </li>
        <li>
                Telefono: <input type="text" name="phone" value="<?=$phone?>" />
        </li>
        <li>
                Descripcion: <textarea name="description" > <?=$description?></textarea>
        </li>
        <li>
                Foto: <input type="file" name="photo" value="<?=$photo?>" />
        </li>
        <li>
                Sexo: 
                M: <input type="radio" name="gender" value="m" <?=$S1?>/>
                H: <input type="radio" name="gender" value="h" <?=$S2?>/>
                O: <input type="radio" name="gender" value="o" <?=$S3?>/>
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