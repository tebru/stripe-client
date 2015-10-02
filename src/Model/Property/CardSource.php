<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opencardSource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Card;

/**
 * Trait CardSource
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CardSource
{
    /**
     * @var Card
     *
     * @Type("Tebru\Stripe\Model\Card")
     * @SerializedName("source")
     * @Groups("Source")
     */
    private $cardSource;

    /**
     * @return Card
     */
    public function getCardSource()
    {
        return $this->cardSource;
    }

    /**
     * @param Card $cardSource
     * @return $this
     */
    public function setCardSource(Card $cardSource)
    {
        $this->cardSource = $cardSource;

        return $this;
    }
}
