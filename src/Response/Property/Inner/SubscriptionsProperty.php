<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Subscriptions;

/**
 * Trait Subscriptions
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SubscriptionsProperty
{
    /**
     * @var Subscriptions
     *
     * @Type("Tebru\Stripe\Response\Inner\Subscriptions")
     */
    private $subscriptions;

    /**
     * @return Subscriptions
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * @param Subscriptions $subscriptions
     * @return $this
     */
    public function setSubscriptions(Subscriptions $subscriptions)
    {
        $this->subscriptions = $subscriptions;

        return $this;
    }
}
