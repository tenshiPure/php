<?php

require_once 'iAccount.php';

class RichPremiumAccount implements iAccount
{
    /**
     * @return bool
     */
	public function isRichPremium()
	{
		return true;
	}

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
		echo "お知らせ：【リッチプレミアム会員の継続利用について】\n\n";
	}

	/**
	 * @return int
	 */
	public function getDiscountPrice()
	{
		return 2000;
	}
}
