<?php

require_once 'iAccount.php';

class PremiumAccount implements iAccount
{
	/**
	 * @return bool
	 */
	public function isPremium()
	{
		return true;
	}

	/**
	 *
	 */
	public function announce()
	{
		echo "お知らせ：【プレミアム会員の継続利用について】\n\n";
	}
}
