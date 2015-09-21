<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\ActiveAccount;

/**
 * Trait ActiveAccountProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ActiveAccountProperty
{
    /**
     * @var ActiveAccount
     *
     * @Type("Tebru\Stripe\Response\Inner\ActiveAccount")
     */
    private $activeAccount;

    /**
     * @return ActiveAccount
     */
    public function getActiveAccount()
    {
        return $this->activeAccount;
    }

    /**
     * @param ActiveAccount $activeAccount
     * @return $this
     */
    public function setActiveAccount(ActiveAccount $activeAccount)
    {
        $this->activeAccount = $activeAccount;

        return $this;
    }
}
