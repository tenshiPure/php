<?php

require_once 'model.php';

$model = new Model();

echo 'your account? normal/premium/rich : ';
$inputtedAccount = trim(fgets(STDIN));

try {
	$account = $model->getAccount($inputtedAccount);

} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}


echo 'current plan? small/normal/large(/mega)(/giga) : ';
$inputtedCurrentPlan = trim(fgets(STDIN));

try {
	$currentPlan = $model->getPlan($account, $inputtedCurrentPlan);

} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}

echo 'next plan? normal/large(/mega)(/giga) : ';
$inputtedNextPlan = trim(fgets(STDIN));

try {
	$nextPlan = $model->getPlan($account, $inputtedNextPlan);

} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}
echo "\n";

$account->announce();

try {
	$model->change($currentPlan, $nextPlan);
	$nextPlan->show();

} catch (Exception $e) {
	echo $e->getMessage();
	exit;
}

