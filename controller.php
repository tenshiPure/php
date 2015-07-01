<?php

class PlanBase
{
	public function show()
	{
		echo "選択したのは{$this->name}で月{$this->fee}円、容量は{$this->volume}です。";
	}
}

class SmallPlan extends PlanBase
{
	public function __construct()
	{
		$this->fee = '3000';
		$this->name = 'スモールプラン';
		$this->volume = '1GB';
	}
}

class NormalPlan extends PlanBase
{
	public function __construct()
	{
		$this->fee = '5000';
		$this->name = 'ノーマルプラン';
		$this->volume = '3GB';
	}
}

class LargePlan extends PlanBase
{
	public function __construct()
	{
		$this->fee = '7000';
		$this->name = 'ラージプラン';
		$this->volume = '5GB';
	}
}

echo 'plan? small/normal/large : ';
$selected = trim(fgets(STDIN));


if ($selected === 'small') {
	$plan = new SmallPlan();
} elseif ($selected === 'normal') {
	$plan = new NormalPlan();
} else {
	$plan = new LargePlan();
}

$plan->show();
