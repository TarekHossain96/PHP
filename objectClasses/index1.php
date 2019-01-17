<?php
/**
 * 
 */
class Demo{
	
	public function myName(){
		echo "My name is Tarek";
	}
	public function myAge($age){
		echo "My name is $age";
	}
}
$demo = new Demo;
$demo->myName();
echo "<br>";
$demo->myAge(25);
?>