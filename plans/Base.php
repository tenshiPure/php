<?php

class PlanBase
{
	public function show()
	{
		echo "選択したのは{$this->name}で月{$this->fee}円、容量は{$this->volume}です。";
	}
}
