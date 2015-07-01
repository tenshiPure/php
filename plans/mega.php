<?php

require_once 'Base.php';

class MegaPlan extends PlanBase
{
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '9000';
		$this->name = 'メガプラン';
		$this->volume = '7GB';
	}
}