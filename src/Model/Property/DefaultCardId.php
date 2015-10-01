<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait DefaultCard
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DefaultCardId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("default_card")
     */
    private $defaultCardId;

    /**
     * @return string
     */
    public function getDefaultCardId()
    {
        return $this->defaultCardId;
    }

    /**
     * @param string $defaultCardId
     * @return $this
     */
    public function setDefaultCardId($defaultCardId)
    {
        $this->defaultCardId = $defaultCardId;

        return $this;
    }
}
