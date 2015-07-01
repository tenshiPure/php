<?php

require_once 'plans/small.php';
require_once 'plans/normal.php';
require_once 'plans/large.php';

class Model
{
	public function getPlan($selected)
	{
		if ($selected === 'small') {
			return new SmallPlan();

		} elseif ($selected === 'normal') {
			return new NormalPlan();

		} elseif ($selected === 'large') {
			return new LargePlan();

		} else {
			throw new Exception('選択値不正');
		}
	}
}
