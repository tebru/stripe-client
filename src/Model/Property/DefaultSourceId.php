<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait DefaultSource
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DefaultSourceId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("default_source")
     * @Groups({"CustomerUpdate"})
     */
    private $defaultSourceId;

    /**
     * @return string
     */
    public function getDefaultSourceId()
    {
        return $this->defaultSourceId;
    }

    /**
     * @param string $defaultSourceId
     * @return $this
     */
    public function setDefaultSourceId($defaultSourceId)
    {
        $this->defaultSourceId = $defaultSourceId;

        return $this;
    }
}
