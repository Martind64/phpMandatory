<?php 

class Product{

	public $name;
	public $price;
	public $description;
	public $imgPath;

	function __construct($name, $price, $description, $imgPath)
	{
		$this->name = $name;
		$this->price = $price;
		$this->description = $description;
		$this->imgPath = $imgPath;
	}


}

?>