<?php

require_once 'model.php';

$model = new Model();

echo 'your account? normal/premium : ';
$inputtedAccount = trim(fgets(STDIN));

try {
	$account = $model->getAccount($inputtedAccount);

} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}


echo 'plan? small/normal/large(/mega) : ';
$inputtedPlan = trim(fgets(STDIN));

try {
	$plan = $model->getPlan($account, $inputtedPlan);

} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}

echo "\n";

$account->announce();
$plan->show();
