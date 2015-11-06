<h1>Single Variable</h1>
<?php
// Introduction

$object = new stdClass;
$object->name = 'Ruel Nopal';

echo $object->name;
?>
<h1>Array</h1>
<?php

$object = new stdClass;
$object->names = ['Ruel', 'Cleo', 'Gab', 'Dina'];

echo '<ul>';
foreach ($object->names as $name) {
	# code...
	echo '<li>'. $name .'</li>';
}
echo '</ul>';