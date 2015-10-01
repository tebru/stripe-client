<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Property;

/**
 * Class Subscriptions
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Subscriptions extends StripeList
{
    use Property\Error;

    /**
     * @var Subscription[]
     *
     * @Type("array<Tebru\Stripe\Model\Subscription>")
     * @SerializedName("data")
     */
    private $subscriptions;

    /**
     * @return Subscription[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * @param Subscription[] $subscriptions
     * @return $this
     */
    public function setSubscriptions(array $subscriptions)
    {
        $this->subscriptions = $subscriptions;

        return $this;
    }
}
