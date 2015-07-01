<?php

require_once 'iAccount.php';

class NormalAccount implements iAccount
{
	public function isPremium()
	{
		return false;
	}

	public function announce()
	{
		echo "お知らせ：【プレミアム会員になりませんか】\n\n";
	}
}
