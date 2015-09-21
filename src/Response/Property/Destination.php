<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Destination
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Destination
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $destination;

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }
}
