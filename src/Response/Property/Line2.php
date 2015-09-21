<?php
/*
 * Copyright (c) 2025 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Line2
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Line2
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $line2;

    /**
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * @param string $line2
     * @return $this
     */
    public function setLine2($line2)
    {
        $this->line2 = $line2;

        return $this;
    }
}
