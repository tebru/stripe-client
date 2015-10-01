<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Cards
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Cards extends StripeList
{
    use Property\Error;

    /**
     * @var Card[]
     *
     * @Type("array<Tebru\Stripe\Model\Card>")
     * @SerializedName("data")
     */
    private $cards;

    /**
     * @return Card[]
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * @param Card[] $cards
     * @return $this
     */
    public function setCards(array $cards)
    {
        $this->cards = $cards;

        return $this;
    }
}
