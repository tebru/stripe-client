<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opengenericSource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use Tebru\Stripe\Model\Card;

/**
 * Trait GenericSource
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait GenericSource
{
    /**
     * @var string
     */
    private $source;

    /**
     * @return Card|string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param Card|string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }
}
