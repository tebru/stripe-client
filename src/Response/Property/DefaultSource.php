<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DefaultSource
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DefaultSource
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $defaultSource;

    /**
     * @return string
     */
    public function getDefaultSource()
    {
        return $this->defaultSource;
    }

    /**
     * @param string $defaultSource
     * @return $this
     */
    public function setDefaultSource($defaultSource)
    {
        $this->defaultSource = $defaultSource;

        return $this;
    }
}
