<?php
$age = array('Tarek'=>'24', 'Tanvir'=>'20','Tinni'=>'14');
print_r(array_change_key_case($age, CASE_UPPER));
echo "<br>";
print_r(array_change_key_case($age, CASE_LOWER));
?>