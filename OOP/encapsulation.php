<?php
/**
 * Encapsulation
 */
class User
{
	 private $name;
     private $gender;

public function getName(){
  return $this->name;
}

 public function setName($name) {
  $this->name = $name;
 }
}
$user = new User();
$user->setName('Michal');
echo $user->getName();
?>