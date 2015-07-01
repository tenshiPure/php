<?php

require_once 'iAccount.php';

class PremiumAccount implements iAccount
{
	public function __construct()
	{
		$this->name = 'プレミアム会員';
	}

	public function isPremium()
	{
		return true;
	}
}
