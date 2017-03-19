<?php 

class User 
{
	public $firstname;
	public $lastname;
	public $username;
	public $email;
	public $address;
	public $phoneNo;
	public $password;
	public $role;

	function __construct($firstname, $lastname, $username, $email, $address, $phoneNo, $password)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->email = $email;
		$this->address = $address;
		$this->phoneNo = $phoneNo;
		$this->password = $password;
		$this->role = 'ROLE_USER';

	}

}



?>