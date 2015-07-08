<?php

require_once 'Account.php';
require_once 'Plan.php';

class Model
{
    /**
     * @return Account
     *
     * @throws Exception
     */
    public function getAccount()
    {
        echo 'your account? normal/premium/rich : ';
        $input = trim(fgets(STDIN));

        return Account::create($input);
    }

    /**
     * @param Account $account
     * @return Plan
     *
     * @throws Exception
     */
    public function getCurrentPlan(Account $account)
    {
        echo 'current plan? small/normal/large(/mega)(/giga) : ';
        $input = trim(fgets(STDIN));

        return Plan::create($input, $account);
    }

    /**
     * @param Account $account
     * @return Plan
     *
     * @throws Exception
     */
    public function getNextPlan(Account $account)
    {
        echo 'next plan? normal/large(/mega)(/giga) : ';
        $input = trim(fgets(STDIN));

        return Plan::create($input, $account);
    }

    /**
     * @param Plan $current
     * @param Plan $next
     *
     * @throws Exception
     */
    public function change(Plan $current, Plan $next)
    {
        if (!$current->isChangeable($next)) {
            throw new Exception("{$current->getName()}から{$next->getName()}への変更は不可能です。\n");
        }

        echo "{$current->getName()}から{$next->getName()}に変更しました\n";
    }
}
