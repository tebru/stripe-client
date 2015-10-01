<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait AccountBalance
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AccountBalance
{
    /**
     * @var integer
     *
     * @Type("integer")
     * @Groups({"CustomerCreate", "CustomerUpdate"})
     */
    private $accountBalance;

    /**
     * @return integer
     */
    public function getAccountBalance()
    {
        return $this->accountBalance;
    }

    /**
     * @param integer $accountBalance
     * @return $this
     */
    public function setAccountBalance($accountBalance)
    {
        $this->accountBalance = $accountBalance;

        return $this;
    }
}
