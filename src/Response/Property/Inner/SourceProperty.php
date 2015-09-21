<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\CardResponse;

/**
 * Trait SourceProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SourceProperty
{
    /**
     * @var CardResponse
     *
     * @Type("Tebru\Stripe\Response\CardResponse")
     */
    private $source;

    /**
     * @return CardResponse
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param CardResponse $source
     * @return $this
     */
    public function setSource(CardResponse $source)
    {
        $this->source = $source;

        return $this;
    }
}
