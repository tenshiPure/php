<?php

class PlanBase
{
	/** @var iAccount */
	protected $account;
	public $name;
	protected $fee;
	protected $volume;
	public $code;
	public $fromable;

	public function show()
	{
		echo "選択したのは{$this->name}で月{$this->calcFee()}円、容量は{$this->volume}です。\n";
	}

	private function calcFee()
	{
		return ($this->account->isPremium()) ? $this->fee - 1000 : $this->fee;
	}
}
