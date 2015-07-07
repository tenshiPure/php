<?php

require_once 'iAccount.php';

class NormalAccount implements iAccount
{
    /**
     * @return bool
     */
	public function isRichPremium()
	{
		return false;
	}

	/**
	 * @return bool
	 */
	public function isPremium()
	{
		return false;
	}

	/**
	 *
	 */
	public function announce()
	{
		echo "お知らせ：【プレミアム会員になりませんか】\n\n";
	}

	/**
	 * @return int
	 */
	public function getDiscountPrice()
	{
		return 0;
	}
}
