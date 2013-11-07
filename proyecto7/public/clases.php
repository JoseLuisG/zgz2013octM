<?php


define ('LOCATION', 'Zaragoza');

class userClass
{
	public $username = "caca";
	public $email;
	protected $password;
	protected $state = 0;
	public $location = LOCATION;
	const USERLOCATION=99;
	
	public function __construct()
	{
		$this->state = 1;
	}
	
	
	
// 	function selectUser();
	
// 	function insertUser();
	
// 	function deleteUser();
	
// 	function updateUser();
	
// 	function changePassword();

	/**
	 * @param field_type $password
	 */
	final public function setPassword($password) {
		$this->password = $password;
	}
	
	
}

interface motorista
{
	public function moto();
}
interface montanista 
{
	public function pasear();
	public function caminar($velocidad);	
}


abstract class escalador implements montanista, motorista
{
	 public $altura;
	 
	 public function subir()
	 {
	 	echo "subir";
	 }
	 
	 abstract function bajar();
}

// class deportista extends escalador
// {
// 	public $depor;
	
// 	public function correr()
// 	{
// 		echo "corerrer";
// 	}
	
// 	public function bajars()
// 	{
// 		echo "bajar";
// 	}
// }


class alumnClass extends userClass
{
	public $course;
	private $profileid;
	private $tutor;
	public static $bdate='1/1/200';
	
	public function __construct($tutor)
	{
		$this->tutor = $tutor;
		parent::__construct();
	}
	
	public function __destruct()
	{
		echo "Noooooo!!!!!";
	}
	
	public function getBdate()
	{
		return self::$bdate;
	}
	
// 	public function setPassword()
// 	{
// 		echo "asdasd";
// 	}
}





$user = new userClass();
$user2 = new userClass();


$alumn = new alumnClass('Patricia');

$alumn->username = "Agustin";
$alumn->email = "agustincl@gmail.com";
$alumn->setPassword('kaka');
// $alumn->state = 2;
$alumn->course = '1789';

echo $alumn->getBdate();
echo alumnClass::$bdate;
// $alumn->profileid = '91236';

echo userClass::USERLOCATION;



// echo get_class($user);

// echo "<hr/>";

// var_dump($user);

echo "<pre>";
print_r($alumn);
echo "</pre>";


echo get_class($user2);






// $escalador = new deportista();



echo "<pre>";
print_r($escalador);
echo "</pre>";




function saltar(montanista $user)
{
	echo "saltar";
}




saltar($user);




