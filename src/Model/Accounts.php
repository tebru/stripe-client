<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Accounts
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Accounts extends StripeList
{
    use Property\Error;

    /**
     * @var Account[]
     *
     * @Type("array<Tebru\Stripe\Model\Account>")
     * @SerializedName("data")
     */
    private $accounts;

    /**
     * @return Account[]
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @param Account[] $accounts
     * @return $this
     */
    public function setAccounts(array $accounts)
    {
        $this->accounts = $accounts;

        return $this;
    }
}
