<?php

class PlanBase
{
	/** @var iAccount */
	protected $account;

	/** @var string */
	public $name;

	/** @var string */
	protected $fee;

	/** @var string */
	protected $volume;

	/** @var string */
	public $code;

	/** @var string[] */
	public $fromable;

	/**
	 *
	 */
	public function show()
	{
		echo "選択したのは{$this->name}で月{$this->calcFee()}円、容量は{$this->volume}です。\n";
	}

	/**
	 * @return string
	 */
	private function calcFee()
	{
		if ($this->account->isRichPremium()) {
			return $this->fee - 2000;

		} elseif ($this->account->isPremium()) {
			return $this->fee - 1000;

		} else {
			return $this->fee;
		}
	}
}
