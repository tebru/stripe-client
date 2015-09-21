<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait MaxRedemptions
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait MaxRedemptions
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $maxRedemptions;

    /**
     * @return integer
     */
    public function getMaxRedemptions()
    {
        return $this->maxRedemptions;
    }

    /**
     * @param int $maxRedemptions
     * @return $this
     */
    public function setMaxRedemptions($maxRedemptions)
    {
        $this->maxRedemptions = $maxRedemptions;

        return $this;
    }
}
