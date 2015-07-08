<?php

require_once 'model.php';


$model = new Model();

try {
	$account = $model->getAccount();
	$currentPlan = $model->getCurrentPlan($account);
	$nextPlan = $model->getNextPlan($account);

	$model->change($currentPlan, $nextPlan);

	echo $nextPlan;
	echo $account;

} catch (Exception $e) {
	echo $e->getMessage();
}
