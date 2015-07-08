<?php

class Account
{
	/** @var string */
	private $code;

	/** @var string */
	private $announce;

	/** @var int */
	private $discount;

	/**
	 * @param string $code
	 * @param string $announce
	 * @param string $discount
     */
	private function __construct($code, $announce, $discount)
	{
		$this->code = $code;
		$this->announce = $announce;
		$this->discount = $discount;
	}

	/**
	 * @param string $input
	 * @return Account
	 *
	 * @throws Exception
     */
	public static function create($input)
	{
		switch ($input) {
			case 'normal' :
				return new Account('normal', '【プレミアム会員になりませんか】', 0);

			case 'premium' :
				return new Account('premium', '【プレミアム会員の継続利用について】', 1000);

			case 'rich' :
				return new Account('rich', '【リッチプレミアム会員の継続利用について】', 2000);

			default :
				throw new Exception("不正な会員種別指定です\n");
        }
	}

	/**
	 * @return int
     */
	public function getDiscount()
	{
		return $this->discount;
	}

	/**
	 * @return bool
	 */
	public function isPremium()
	{
		return $this->code === 'premium';
	}

	/**
	 * @return bool
     */
	public function isRich()
	{
		return $this->code === 'rich';
	}

	/**
	 * @return string
     */
	public function __toString()
	{
		return "お知らせ：{$this->announce}\n\n";
	}
}
