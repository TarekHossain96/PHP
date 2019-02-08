<?php
$name = array(
	        array(
	          	'id' => 1001,
	          	'fname' => 'Ali',
	          	'lname' => 'Sajal',
	        ),
	        array(
	          	'id' => 1002,
	          	'fname' => 'Rakibul',
	          	'lname' => 'Islam',
	        ),
	        array(
	          	'id' => 1003,
	          	'fname' => 'Sagor',
	          	'lname' => 'Ahmed',
	        )
	);

print "With out index key:";
$last_name = array_column($name, 'lname');
print("<pre>");
print_r($last_name);
print("</pre>");

print "Get column of last names from a recordset, indexed by the 'id' column:";

$last_name = array_column($name, 'lname', 'id');
print("<pre>");
print_r($last_name);
print("</pre>");

?>