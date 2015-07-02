<?php

require_once 'Base.php';

class MegaPlan extends PlanBase
{
	/**
	 * @param iAccount $account
	 */
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '9000';
		$this->name = 'メガプラン';
		$this->volume = '7GB';
		$this->code = 'mega';
		$this->fromable = ['small', 'normal', 'large'];
	}
}
