<?php

interface iAccount
{
    /**
     * @return bool
     */
    public function isRichPremium();

    /**
     * @return bool
     */
    public function isPremium();

    /**
     *
     */
    public function announce();
}
