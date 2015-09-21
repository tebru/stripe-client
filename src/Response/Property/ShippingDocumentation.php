<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ShippingDocumentation
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ShippingDocumentation
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $shippingDocumentation;

    /**
     * @return string
     */
    public function getShippingDocumentation()
    {
        return $this->shippingDocumentation;
    }

    /**
     * @param string $shippingDocumentation
     * @return $this
     */
    public function setShippingDocumentation($shippingDocumentation)
    {
        $this->shippingDocumentation = $shippingDocumentation;

        return $this;
    }
}
