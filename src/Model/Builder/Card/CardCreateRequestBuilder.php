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
use Tebru\Stripe\Model\Property\DefaultForCurrency;
use Tebru\Stripe\Model\Property\Metadata;
use Tebru\Stripe\Model\Property\Source;

/**
 * Class CardCreateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CardCreateRequestBuilder extends RequestBuilder
{
    use Source;
    use Metadata;
    use DefaultForCurrency;

    public function build()
    {
        Tebru\assertNotNull($this->getSource(), 'Source must be set');

        $card = new Card();
        $card->setMetadata($this->getMetadata());
        $card->setDefaultForCurrency($this->getDefaultForCurrency());

        $cardRequest = new CardRequest();
        $cardRequest->setSource($this->getSource());

        $card->setRequest($cardRequest);

        return $card;
    }
}
