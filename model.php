<?php

require_once 'accounts/normal.php';
require_once 'accounts/premium.php';

require_once 'plans/small.php';
require_once 'plans/normal.php';
require_once 'plans/large.php';
require_once 'plans/mega.php';

class Model
{
	public function getAccount($inputted)
	{
		if ($inputted === 'normal') {
			return new NormalAccount($inputted);

		} elseif ($inputted === 'premium') {
			return new PremiumAccount($inputted);

		} else {
			throw new Exception('選択値不正');
		}
	}

	public function getPlan(iAccount $account, $selected)
	{
		if ($selected === 'small') {
			return new SmallPlan($account);

		} elseif ($selected === 'normal') {
			return new NormalPlan($account);

		} elseif ($selected === 'large') {
			return new LargePlan($account);

		} elseif ($selected === 'mega') {
			if (!$account->isPremium()) {
				throw new Exception('メガプランはプレミアム会員のみです');
			}

			return new MegaPlan($account);

		} else {
			throw new Exception('選択値不正');
		}
	}

	public function change(PlanBase $current, PlanBase $next)
	{
		echo "{$current->name}から{$next->name}に変更しました。\n";
	}
}
