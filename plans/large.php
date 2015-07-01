<?php

require_once 'Base.php';

class LargePlan extends PlanBase
{
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '7000';
		$this->name = 'ラージプラン';
		$this->volume = '5GB';
	}
}
