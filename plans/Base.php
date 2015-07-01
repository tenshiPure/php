<?php

class PlanBase
{
	/** @var iAccount */
	protected $account;
	protected $name;
	protected $fee;
	protected $volume;

	public function show()
	{
		echo "選択したのは{$this->name}で月{$this->calcFee()}円、容量は{$this->volume}です。\n";
	}

	private function calcFee()
	{
		return ($this->account->isPremium()) ? $this->fee - 1000 : $this->fee;
	}
}
