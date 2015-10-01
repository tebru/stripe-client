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
 * Class Recipients
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Recipients
{
    use Property\Error;

    /**
     * @var Recipient[]
     *
     * @Type("array<Tebru\Stripe\Model\Recipient>")
     * @SerializedName("data")
     */
    private $recipients;

    /**
     * @return Recipient[]
     */
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param Recipient[] $recipients
     * @return $this
     */
    public function setRecipients(array $recipients)
    {
        $this->recipients = $recipients;

        return $this;
    }
}
