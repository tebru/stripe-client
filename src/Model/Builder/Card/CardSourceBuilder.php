<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Card;

use Tebru;
use Tebru\Stripe\Model\Builder\Request\CardRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Card;
use Tebru\Stripe\Model\Property;

/**
 * Class CardSourceBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CardSourceBuilder extends RequestBuilder
{
    use Property\Object;
    use Property\Number;
    use Property\ExpMonth;
    use Property\ExpYear;
    use Property\Currency;
    use Property\Cvc;
    use Property\Name;
    use Property\AddressLine1;
    use Property\AddressLine2;
    use Property\AddressCity;
    use Property\AddressState;
    use Property\AddressZip;
    use Property\AddressCountry;

    public function build()
    {
        Tebru\assertNotNull($this->getNumber(), 'Card number must not be null');
        Tebru\assertNotNull($this->getExpMonth(), 'Expiration month must not be null');
        Tebru\assertNotNull($this->getExpYear(), 'Expiration year must not be null');

        if (null === $this->getObject()) {
            $this->setObject('card');
        }

        if (null === $this->getCurrency()) {
            $this->setCurrency('usd');
        }

        $card = new Card();
        $card->setObject($this->getObject());
        $card->setExpMonth($this->getExpMonth());
        $card->setExpYear($this->getExpYear());
        $card->setCurrency($this->getCurrency());
        $card->setName($this->getName());
        $card->setAddressLine1($this->getAddressLine1());
        $card->setAddressLine2($this->getAddressLine2());
        $card->setAddressCity($this->getAddressCity());
        $card->setAddressState($this->getAddressState());
        $card->setAddressZip($this->getAddressZip());
        $card->setAddressCountry($this->getAddressCountry());

        $cardRequest = new CardRequest();
        $cardRequest->setNumber($this->getNumber());
        $cardRequest->setCvc($this->getCvc());

        $card->setRequest($cardRequest);

        return $card;
    }
}
