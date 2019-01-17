<?php

class Tv{
	
	public $model ='xyz';
	public $volume =1;

	public function volumeUp(){
		$this->volume++;
	}
	public function volumeDown(){
		$this->volume--;
	}
}

$tvOne = new Tv();
$tvTwo = new Tv();
echo $tvOne->volume;
echo '</br>';
$tvTwo->volumeUp();
echo $tvTwo->volume;
?>