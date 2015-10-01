<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait SsnLast4Provided
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SsnLast4Provided
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $ssnLast4Provided;

    /**
     * @return boolean
     */
    public function isSsnLast4Provided()
    {
        return $this->ssnLast4Provided;
    }

    /**
     * @param boolean $ssnLast4Provided
     * @return $this
     */
    public function setSsnLast4Provided($ssnLast4Provided)
    {
        $this->ssnLast4Provided = $ssnLast4Provided;

        return $this;
    }
}
