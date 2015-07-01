<?php

require_once 'model.php';

echo 'plan? small/normal/large : ';
$selected = trim(fgets(STDIN));

$model = new Model();

try {
	$plan = $model->getPlan($selected);
	$plan->show();

} catch (Exception $e) {
	echo $e->getMessage();
}
