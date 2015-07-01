<?php

require_once 'plans/small.php';
require_once 'plans/normal.php';
require_once 'plans/large.php';

class Model
{
	public function getPlan($account, $selected)
	{
		if ($selected === 'small') {
			return new SmallPlan($account);

		} elseif ($selected === 'normal') {
			return new NormalPlan($account);

		} elseif ($selected === 'large') {
			return new LargePlan($account);

		} else {
			throw new Exception('選択値不正');
		}
	}
}
