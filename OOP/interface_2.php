<?php
interface Shape{
	public function calculateArea();
}

class Circle implements Shape{
	private $radius;

	public function __construct($radius){
		$this->radius = $radius;
	}
	public function calculateArea(){
		return $this->radius * $this->radius * pi();
	}
}
class Rectangle implements Shape{
	private $width;
	private $height;

	public function __construct($width, $height){
		$this->width = $width;
		$this->height = $height;
	}
	public function calculateArea(){
		return $this->width * $this->height;
	}
}

$cir = new Circle(3);
$rec = new Rectangle(3,4);

echo $cir->calculateArea();
echo "<br>";
echo $rec->calculateArea();
?>