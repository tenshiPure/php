<?php

require_once 'Base.php';

class NormalPlan extends PlanBase
{
	public function __construct($account)
	{
		$this->account = $account;
		$this->fee = '5000';
		$this->name = 'ノーマルプラン';
		$this->volume = '3GB';
	}
}
