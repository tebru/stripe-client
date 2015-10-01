<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\LegalEntity;

/**
 * Trait LegalEntityObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait LegalEntityObject
{
    /**
     * @var LegalEntity
     *
     * @Type("Tebru\Stripe\Model\LegalEntity")
     * @Groups({"LegalEntity"})
     */
    private $legalEntity;

    /**
     * @return LegalEntity
     */
    public function getLegalEntity()
    {
        return $this->legalEntity;
    }

    /**
     * @param LegalEntity $legalEntity
     * @return $this
     */
    public function setLegalEntity(LegalEntity $legalEntity = null)
    {
        $this->legalEntity = $legalEntity;

        return $this;
    }
}
