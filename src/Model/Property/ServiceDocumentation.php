<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ServiceDocumentation
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ServiceDocumentation
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $serviceDocumentation;

    /**
     * @return string
     */
    public function getServiceDocumentation()
    {
        return $this->serviceDocumentation;
    }

    /**
     * @param string $serviceDocumentation
     * @return $this
     */
    public function setServiceDocumentation($serviceDocumentation)
    {
        $this->serviceDocumentation = $serviceDocumentation;

        return $this;
    }
}
