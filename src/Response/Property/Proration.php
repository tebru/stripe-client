<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Proration
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Proration
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $proration;

    /**
     * @return boolean
     */
    public function isProration()
    {
        return $this->proration;
    }

    /**
     * @param boolean $proration
     * @return $this
     */
    public function setProration($proration)
    {
        $this->proration = $proration;

        return $this;
    }
}
