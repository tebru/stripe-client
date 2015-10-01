<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CvcCheck
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CvcCheck
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $cvcCheck;

    /**
     * @return string
     */
    public function getCvcCheck()
    {
        return $this->cvcCheck;
    }

    /**
     * @param string $cvcCheck
     * @return $this
     */
    public function setCvcCheck($cvcCheck)
    {
        $this->cvcCheck = $cvcCheck;

        return $this;
    }
}
