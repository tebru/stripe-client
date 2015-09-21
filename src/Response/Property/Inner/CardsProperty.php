<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Cards;

/**
 * Trait CardsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CardsProperty
{
    /**
     * @var Cards
     *
     * @Type("Tebru\Stripe\Response\Inner\Cards")
     */
    private $cards;

    /**
     * @return Cards
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param Cards $cards
     * @return $this
     */
    public function setCards(Cards $cards)
    {
        $this->cards = $cards;

        return $this;
    }
}
