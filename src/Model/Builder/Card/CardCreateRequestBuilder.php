<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Card;

use LogicException;
use Tebru;
use Tebru\Stripe\Model\Builder\Request\CardRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Card;
use Tebru\Stripe\Model\Property;

/**
 * Class CardCreateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CardCreateRequestBuilder extends RequestBuilder
{
    use Property\GenericSource;
    use Property\Metadata;
    use Property\DefaultForCurrency;

    public function build()
    {
        Tebru\assertNotNull($this->getSource(), 'Source must be set');

        $card = new Card();
        $card->setMetadata($this->getMetadata());
        $card->setDefaultForCurrency($this->getDefaultForCurrency());

        $cardRequest = new CardRequest();

        $source = $this->getSource();
        if (is_string($source)) {
            $cardRequest->setSourceId($source);
        } elseif ($source instanceof Card) {
            $cardRequest->setCardSource($source);
        } elseif (null === $source) {
        } else {
            throw new LogicException('Source must be a string or Card object');
        }

        $card->setRequest($cardRequest);

        return $card;
    }
}
