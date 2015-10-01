<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Recipient
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RecipientId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("recipient")
     */
    private $recipientId;

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     * @return $this
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;

        return $this;
    }
}
