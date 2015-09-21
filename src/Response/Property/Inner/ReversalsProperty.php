<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Reversals;

/**
 * Trait ReversalsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ReversalsProperty
{
    /**
     * @var Reversals
     *
     * @Type("Tebru\Stripe\Response\Inner\Reversals")
     */
    private $reversals;

    /**
     * @return Reversals
     */
    public function getReversals()
    {
        return $this->reversals;
    }

    /**
     * @param Reversals $reversals
     * @return $this
     */
    public function setReversals(Reversals $reversals)
    {
        $this->reversals = $reversals;

        return $this;
    }
}
