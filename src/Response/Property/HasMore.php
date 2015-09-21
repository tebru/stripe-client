<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait HasMore
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait HasMore
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $hasMore;

    /**
     * @return boolean
     */
    public function hasMore()
    {
        return $this->hasMore;
    }

    /**
     * @param boolean $hasMore
     * @return $this
     */
    public function setHasMore($hasMore)
    {
        $this->hasMore = $hasMore;

        return $this;
    }
}
