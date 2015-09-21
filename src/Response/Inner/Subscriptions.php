<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;
use Tebru\Stripe\Response\SubscriptionResponse;

/**
 * Class Subscriptions
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Subscriptions
{
    use Object;
    use HasMore;
    use Url;
    use TotalCount;

    /**
     * @var SubscriptionResponse[]
     *
     * @Type("array<Tebru\Stripe\Response\SubscriptionResponse>")
     */
    private $data;

    /**
     * @return SubscriptionResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param SubscriptionResponse[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
