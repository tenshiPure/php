<?php

require_once 'Base.php';

class GigaPlan extends PlanBase
{
	/**
	 * @param iAccount $account
	 */
	public function __construct(iAccount $account)
	{
		$this->account = $account;
		$this->fee = '11000';
		$this->name = 'ギガプラン';
		$this->volume = '9GB';
		$this->code = 'giga';
		$this->fromable = ['mega'];
	}
}
