<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait PastDue
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PastDue
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $pastDue;

    /**
     * @return boolean
     */
    public function pastDue()
    {
        return $this->pastDue;
    }

    /**
     * @param boolean $pastDue
     * @return $this
     */
    public function setPastDue($pastDue)
    {
        $this->pastDue = $pastDue;

        return $this;
    }
}
