<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Lines;

/**
 * Trait LinesProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait LinesProperty
{
    /**
     * @var Lines
     *
     * @Type("Tebru\Stripe\Response\Inner\Lines")
     */
    private $lines;

    /**
     * @return Lines
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * @param Lines $lines
     * @return $this
     */
    public function setLines(Lines $lines)
    {
        $this->lines = $lines;

        return $this;
    }
}
