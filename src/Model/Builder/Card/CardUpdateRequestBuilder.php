<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Card;

use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Card;
use Tebru\Stripe\Model\Property\AddressCity;
use Tebru\Stripe\Model\Property\AddressCountry;
use Tebru\Stripe\Model\Property\AddressLine1;
use Tebru\Stripe\Model\Property\AddressLine2;
use Tebru\Stripe\Model\Property\AddressState;
use Tebru\Stripe\Model\Property\AddressZip;
use Tebru\Stripe\Model\Property\DefaultForCurrency;
use Tebru\Stripe\Model\Property\ExpMonth;
use Tebru\Stripe\Model\Property\ExpYear;
use Tebru\Stripe\Model\Property\Metadata;
use Tebru\Stripe\Model\Property\Name;

/**
 * Class CardUpdateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CardUpdateRequestBuilder extends RequestBuilder
{
    use AddressCity;
    use AddressCountry;
    use AddressLine1;
    use AddressLine2;
    use AddressState;
    use AddressZip;
    use DefaultForCurrency;
    use ExpMonth;
    use ExpYear;
    use Metadata;
    use Name;

    public function build()
    {
        $card = new Card();
        $card->setAddressCity($this->getAddressCity());
        $card->setAddressCountry($this->getAddressCountry());
        $card->setAddressLine1($this->getAddressLine1());
        $card->setAddressState($this->getAddressState());
        $card->setAddressZip($this->getAddressZip());
        $card->setDefaultForCurrency($this->getDefaultForCurrency());
        $card->setExpMonth($this->getExpMonth());
        $card->setExpYear($this->getExpYear());
        $card->setMetadata($this->getMetadata());
        $card->setName($this->getName());

        return $card;
    }
}
