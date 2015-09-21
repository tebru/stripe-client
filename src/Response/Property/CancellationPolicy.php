<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CancellationPolicy
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CancellationPolicy
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $cancellationPolicy;

    /**
     * @return string
     */
    public function getCancellationPolicy()
    {
        return $this->cancellationPolicy;
    }

    /**
     * @param string $cancellationPolicy
     * @return $this
     */
    public function setCancellationPolicy($cancellationPolicy)
    {
        $this->cancellationPolicy = $cancellationPolicy;

        return $this;
    }
}
