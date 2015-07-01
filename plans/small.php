<?php

require_once 'Base.php';

class SmallPlan extends PlanBase
{
	public function __construct()
	{
		$this->fee = '3000';
		$this->name = 'スモールプラン';
		$this->volume = '1GB';
	}
}
