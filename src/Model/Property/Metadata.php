<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait MetaData
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Metadata
{
    /**
     * @var array
     *
     * @Type("array")
     * @Groups({
     *     "ChargeCreate", "ChargeUpdate",
     *     "RefundCreate", "RefundUpdate",
     *     "CustomerCreate", "CustomerUpdate",
     *     "CardCreate", "CardUpdate",
     *     "AccountUpdate"
     * })
     */
    private $metadata = [];

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     * @return $this
     */
    public function setMetadata(array $metadata)
    {
        $this->metadata = $metadata;

        return $this;
    }
}
