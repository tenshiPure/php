<?php

require_once 'model.php';

echo 'plan? small/normal/large : ';
$selected = trim(fgets(STDIN));

$model = new Model();

$plan = $model->getPlan($selected);

$plan->show();
