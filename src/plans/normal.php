<?php

require_once 'Base.php';

class NormalPlan extends PlanBase
{
	/**
	 * @param iAccount $account
	 */
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '5000';
		$this->name = 'ノーマルプラン';
		$this->volume = '3GB';
		$this->code = 'normal';
		$this->fromable = ['small', 'large'];
	}
}
