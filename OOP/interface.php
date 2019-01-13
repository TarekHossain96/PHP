<?php
/**
 * Interface
 */
interface School{
	public function mySchool();
}
interface College{
	public function myCollege();
}
interface Versity{
	public function myVersity();
}
class Student implements School, College, Versity{
	
	function __construct()
	{
		
	}
	public function mySchool(){
		echo "I am a School Student.</br>";
	}
	public function myCollege(){
		echo "I am a College Student.</br>";
	}
	public function myVersity(){
		echo "I am a Versity Student.</br>";
	}
}
class Teacher implements School, College, Versity{
	
	function __construct()
	{
		$this->mySchool();
		$this->myCollege();
		$this->myVersity();
	}
	public function mySchool(){
		echo "I am a School Teacher.</br>";
	}
	public function myCollege(){
		echo "I am a College Teacher.</br>";
	}
	public function myVersity(){
		echo "I am a Versity Teacher.</br>";
	}
}
$student = new Student;
$student->mySchool();
$student->myCollege();
$student->myVersity();
echo "</br>";
$student = new Teacher;
?>