<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait CardsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Cards
{
    /**
     * @var Model\Cards
     *
     * @Type("Tebru\Stripe\Model\Cards")
     */
    private $cards;

    /**
     * @return Model\Cards
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param Model\Cards $cards
     * @return $this
     */
    public function setCards(Model\Cards $cards)
    {
        $this->cards = $cards;

        return $this;
    }
}
