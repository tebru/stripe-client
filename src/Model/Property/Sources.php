<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait Sources
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Sources
{
    /**
     * @var Model\Sources
     *
     * @Type("Tebru\Stripe\Model\Sources")
     */
    private $sources;

    /**
     * @return Model\Sources
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param Model\Sources $sources
     * @return $this
     */
    public function setSources(Model\Sources $sources)
    {
        $this->sources = $sources;

        return $this;
    }
}
