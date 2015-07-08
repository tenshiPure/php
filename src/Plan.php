<?php

class Plan
{
    /** @var string */
    private $code;

    /** @var int */
    private $fee;

    /** @var string */
    private $name;

    /** @var int */
    private $volume;

    /** @var string[] */
    private $fromable;

    /**
     * コンストラクタを公開しないことで意図しない箇所で意図しない値を持った
     * インスタンスが生成される可能性を無くすことが出来る
     *
     * @param string $code
     * @param int $fee
     * @param string $name
     * @param int $volume
     * @param string[] $fromable
     */
    private function __construct($code, $fee, $name, $volume, $fromable)
    {
        $this->code = $code;
        $this->fee = $fee;
        $this->name = $name;
        $this->volume = $volume;
        $this->fromable = $fromable;
    }

    /**
     * このメソッドを通してしかインスタンスを生成できないため
     * パターンや値の定義が意図しない箇所漏れ出る可能性を無くすことが出来る
     *
     * @param string $input
     * @param Account $account
     * @return Plan
     * @throws Exception
     */
    public static function create($input, $account)
    {
        switch ($input) {
            case 'small' :
                return new Plan('small', 3000 - $account->getDiscount(), 'スモールプラン', 1, []);

            case 'normal' :
                return new Plan('normal', 5000 - $account->getDiscount(), 'ノーマルプラン', 3, ['small', 'large', 'giga']);

            case 'large' :
                return new Plan('large', 7000 - $account->getDiscount(), 'ラージプラン', 5, ['small', 'normal', 'large', 'giga']);

            case 'mega' :
                switch ($account->isPremium() || $account->isRich()) {
                    case true :
                        return new Plan('mega', 9000 - $account->getDiscount(), 'メガプラン', 7, ['small', 'normal', 'mega', 'giga']);

                    default :
                        throw new Exception("メガプランを選択できるのはプレミアム会員とリッチプレミアム会員のみです\n");
                }

            case 'giga' :
                switch ($account->isRich()) {
                    case true :
                        return new Plan('giga', 11000 - $account->getDiscount(), 'ギガプラン', 9, ['mega']);

                    default :
                        throw new Exception("メガプランを選択できるのはリッチプレミアム会員のみです\n");
                }

            default :
                throw new Exception("不正なプラン指定です\n");
        }
    }

    /**
     * @param Plan $next
     * @return bool
     */
    public function isChangeable(Plan $next)
    {
        return in_array($this->code, $next->getFromable());
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getFromable()
    {
        return $this->fromable;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "{$this->name}は月{$this->fee}円、容量は{$this->volume}GBです\n\n";
    }
}
