<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ExpYear
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ExpYear
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $expYear;

    /**
     * @return integer
     */
    public function getExpYear()
    {
        return $this->expYear;
    }

    /**
     * @param int $expYear
     * @return $this
     */
    public function setExpYear($expYear)
    {
        $this->expYear = $expYear;

        return $this;
    }
}
