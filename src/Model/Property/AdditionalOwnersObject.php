<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\AdditionalOwners;

/**
 * Trait AdditionalOwnersObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AdditionalOwnersObject
{
    /**
     * @var AdditionalOwners
     *
     * @Type("Tebru\Stripe\Model\AdditionalOwners")
     * @Groups({"AdditionalOwners"})
     */
    private $additionalOwners;

    /**
     * @return AdditionalOwners
     */
    public function getAdditionalOwners()
    {
        return $this->additionalOwners;
    }

    /**
     * @param AdditionalOwners $additionalOwners
     * @return $this
     */
    public function setAdditionalOwners(AdditionalOwners $additionalOwners = null)
    {
        $this->additionalOwners = $additionalOwners;

        return $this;
    }
}
