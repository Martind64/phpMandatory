<?php 

class Product{

	public $name;
	public $price;
	public $description;
	public $category;
	public $subCategory;
	public $imgPath;

	function __construct($name, $description, $price, $imgPath, $category, $subCategory)
	{
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->imgPath = $imgPath;
		$this->category = $category;
		$this->subCategory = $subCategory;
	}


}

?>