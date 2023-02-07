<?php 
include 'database.php';
class user extends database{
	// REGISTER

	public function register($username,$email,$password,$phone)
	{
		$password= md5($password);
		$query= "INSERT INTO users (username,email,password,phone) VALUES ('$username','$email','$password','$phone')";

		$this->dataWrite($query);


	}
	//LOGIN
	public function login($username, $password)
	{ 
		$password= md5($password);
		$query="SELECT * FROM users where username='$username' and password='$password'";
		$result = $this->dataFetch($query);
		return $result;



	}

}

 ?>