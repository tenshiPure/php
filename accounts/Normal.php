<?php

require_once 'iAccount.php';

class NormalAccount implements iAccount
{
	public function __construct()
	{
		$this->name = '通常会員';
	}

	public function isPremium()
	{
		return false;
	}
}
