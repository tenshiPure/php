<?php

require_once 'accounts/normal.php';
require_once 'accounts/premium.php';
require_once 'accounts/richpremium.php';

require_once 'plans/small.php';
require_once 'plans/normal.php';
require_once 'plans/large.php';
require_once 'plans/mega.php';
require_once 'plans/giga.php';

class Model
{
	/**
	 * @param string $inputted
	 * @return iAccount
	 *
	 * @throws Exception
	 */
	public function getAccount($inputted)
	{
		if ($inputted === 'normal') {
			return new NormalAccount($inputted);

		} elseif ($inputted === 'premium') {
			return new PremiumAccount($inputted);

		} elseif ($inputted === 'rich') {
			return new RichPremiumAccount($inputted);

		} else {
			throw new Exception('選択値不正');
		}
	}

	/**
	 * @param iAccount $account
	 * @param string   $selected
	 * @return PlanBase
	 *
	 * @throws Exception
	 */
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

		} elseif ($selected === 'giga') {
			if (!$account->isRichPremium()) {
				throw new Exception('ギガプランはリッチプレミアム会員のみです');
			}

			return new GigaPlan($account);

		} else {
			throw new Exception('選択値不正');
		}
	}

	/**
	 * @param PlanBase $current
	 * @param PlanBase $next
	 *
	 * @throws Exception
	 */
	public function change(PlanBase $current, PlanBase $next)
	{
		if (!in_array($current->code, $next->fromable)) {
			throw new Exception("{$current->name}から{$next->name}への変更は不可能です。\n");
		}

		echo "{$current->name}から{$next->name}に変更しました。\n";
	}
}
