<?php 

class SubCategory	
{
	public $name;
	public $categoryId;
	
	function __construct($name, $categoryId)
	{
		$this->name = $name;
		$this->categoryId = $categoryId;
	}
}



?>