<?php

require_once 'Base.php';

class LargePlan extends PlanBase
{
	/**
	 * @param iAccount $account
	 */
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '7000';
		$this->name = 'ラージプラン';
		$this->volume = '5GB';
		$this->code = 'large';
		$this->fromable = ['small', 'normal', 'mega'];
	}
}
