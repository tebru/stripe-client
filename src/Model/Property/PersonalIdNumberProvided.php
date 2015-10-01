<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait PersonalIdNumberProvided
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PersonalIdNumberProvided
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $personalIdNumberProvided;

    /**
     * @return boolean
     */
    public function isPersonalIdNumberProvided()
    {
        return $this->personalIdNumberProvided;
    }

    /**
     * @param boolean $personalIdNumberProvided
     * @return $this
     */
    public function setPersonalIdNumberProvided($personalIdNumberProvided)
    {
        $this->personalIdNumberProvided = $personalIdNumberProvided;

        return $this;
    }
}
