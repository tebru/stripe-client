<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait LinesProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Lines
{
    /**
     * @var Model\Lines
     *
     * @Type("Tebru\Stripe\Model\Lines")
     */
    private $lines;

    /**
     * @return Model\Lines
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * @param Model\Lines $lines
     * @return $this
     */
    public function setLines(Model\Lines $lines)
    {
        $this->lines = $lines;

        return $this;
    }
}
