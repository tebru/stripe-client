<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CancellationPolicyDisclosure
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CancellationPolicyDisclosure
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $cancellationPolicyDisclosure;

    /**
     * @return string
     */
    public function getCancellationPolicyDisclosure()
    {
        return $this->cancellationPolicyDisclosure;
    }

    /**
     * @param string $cancellationPolicyDisclosure
     * @return $this
     */
    public function setCancellationPolicyDisclosure($cancellationPolicyDisclosure)
    {
        $this->cancellationPolicyDisclosure = $cancellationPolicyDisclosure;

        return $this;
    }
}
