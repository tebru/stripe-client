<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AttemptCount
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AttemptCount
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $attemptCount;

    /**
     * @return integer
     */
    public function getAttemptCount()
    {
        return $this->attemptCount;
    }

    /**
     * @param int $attemptCount
     * @return $this
     */
    public function setAttemptCount($attemptCount)
    {
        $this->attemptCount = $attemptCount;

        return $this;
    }
}
