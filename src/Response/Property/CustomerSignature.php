<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CustomerSignature
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CustomerSignature
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $customerSignature;

    /**
     * @return string
     */
    public function getCustomerSignature()
    {
        return $this->customerSignature;
    }

    /**
     * @param string $customerSignature
     * @return $this
     */
    public function setCustomerSignature($customerSignature)
    {
        $this->customerSignature = $customerSignature;

        return $this;
    }
}
