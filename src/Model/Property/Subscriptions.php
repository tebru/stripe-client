<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait Subscriptions
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Subscriptions
{
    /**
     * @var Model\Subscriptions
     *
     * @Type("Tebru\Stripe\Model\Subscriptions")
     */
    private $subscriptions;

    /**
     * @return Model\Subscriptions
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * @param Model\Subscriptions $subscriptions
     * @return $this
     */
    public function setSubscriptions(Model\Subscriptions $subscriptions)
    {
        $this->subscriptions = $subscriptions;

        return $this;
    }
}
