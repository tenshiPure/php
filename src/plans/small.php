<?php

require_once 'Base.php';

class SmallPlan extends PlanBase
{
	/**
	 * @param iAccount $account
	 */
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '3000';
		$this->name = 'スモールプラン';
		$this->volume = '1GB';
		$this->code = 'small';
		$this->fromable = [];
	}
}
