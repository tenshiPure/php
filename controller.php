<?php

require_once 'plans/small.php';
require_once 'plans/normal.php';
require_once 'plans/large.php';

echo 'plan? small/normal/large : ';
$selected = trim(fgets(STDIN));


if ($selected === 'small') {
	$plan = new SmallPlan();
} elseif ($selected === 'normal') {
	$plan = new NormalPlan();
} else {
	$plan = new LargePlan();
}

$plan->show();
