<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Sources;

/**
 * Trait Sources
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SourcesProperty
{
    /**
     * @var Sources
     *
     * @Type("Tebru\Stripe\Response\Inner\Sources")
     */
    private $sources;

    /**
     * @return Sources
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param Sources $sources
     * @return $this
     */
    public function setSources(Sources $sources)
    {
        $this->sources = $sources;

        return $this;
    }
}
