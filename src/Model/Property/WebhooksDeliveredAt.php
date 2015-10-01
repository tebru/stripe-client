<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait WebhooksDeliveredAt
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait WebhooksDeliveredAt
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $webhooksDeliveredAt;

    /**
     * @return DateTime
     */
    public function getWebhooksDeliveredAt()
    {
        return $this->webhooksDeliveredAt;
    }

    /**
     * @param DateTime $webhooksDeliveredAt
     * @return $this
     */
    public function setWebhooksDeliveredAt(DateTime $webhooksDeliveredAt)
    {
        $this->webhooksDeliveredAt = $webhooksDeliveredAt;

        return $this;
    }
}
