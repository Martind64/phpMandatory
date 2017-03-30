<?php 

class Product{

	public $name;
	public $price;
	public $description;
	public $category;
	public $subCategory;
	public $imgPath;

	function __construct($name, $price, $description, $imgPath, $category, $subCategory)
	{
		$this->name = $name;
		$this->price = $price;
		$this->description = $description;
		$this->imgPath = $imgPath;
		$this->category = $category;
		$this->subCategory = $subCategory;
	}


}

?>