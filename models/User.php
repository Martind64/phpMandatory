<?php 

class User 
{
	public $firstname;
	public $lastname;
	public $username;
	public $email;
	public $password;
	public $role;

	function __construct($firstname, $lastname, $username, $email, $password)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
		$this->role = 'ROLE_USER';

	}

}



?>