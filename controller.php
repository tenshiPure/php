<?php

require_once 'model.php';

echo 'your account? normal/premium : ';
$account = trim(fgets(STDIN));

echo 'plan? small/normal/large : ';
$selected = trim(fgets(STDIN));

$model = new Model();

try {
	$plan = $model->getPlan($account, $selected);
	$plan->show();

} catch (Exception $e) {
	echo $e->getMessage();
}
