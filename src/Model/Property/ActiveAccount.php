<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait ActiveAccount
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ActiveAccount
{
    /**
     * @var Model\ActiveAccount
     *
     * @Type("Tebru\Stripe\Model\ActiveAccount")
     */
    private $activeAccount;

    /**
     * @return Model\ActiveAccount
     */
    public function getActiveAccount()
    {
        return $this->activeAccount;
    }

    /**
     * @param Model\ActiveAccount $activeAccount
     * @return $this
     */
    public function setActiveAccount(Model\ActiveAccount $activeAccount)
    {
        $this->activeAccount = $activeAccount;

        return $this;
    }
}
