<?php

class PlanBase
{
	public function show()
	{
		echo "選択したのは{$this->name}で月{$this->calcFee()}円、容量は{$this->volume}です。";
	}

	private function calcFee()
	{
		return ($this->account === 'premium') ? $this->fee - 1000 : $this->fee;
	}
}
