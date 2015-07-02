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
		return ($this->account->isPremium()) ? $this->fee - 1000 : $this->fee;
	}
}
