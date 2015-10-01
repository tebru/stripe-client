<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Card;

/**
 * Trait Source
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Source
{
    /**
     * @var Card|string
     *
     * @Type("source")
     * @Groups({"Source"})
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
