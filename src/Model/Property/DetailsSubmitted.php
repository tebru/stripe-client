<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DetailsSubmitted
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DetailsSubmitted
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $detailsSubmitted;

    /**
     * @return boolean
     */
    public function isDetailsSubmitted()
    {
        return $this->detailsSubmitted;
    }

    /**
     * @param boolean $detailsSubmitted
     * @return $this
     */
    public function setDetailsSubmitted($detailsSubmitted)
    {
        $this->detailsSubmitted = $detailsSubmitted;

        return $this;
    }
}
