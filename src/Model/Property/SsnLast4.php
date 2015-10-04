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
 * Trait SsnLast4
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SsnLast4
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"LegalEntity"})
     * @SerializedName("ssn_last_4")
     */
    private $ssnLast4;

    /**
     * @return string
     */
    public function getSsnLast4()
    {
        return $this->ssnLast4;
    }

    /**
     * @param string $ssnLast4
     * @return $this
     */
    public function setSsnLast4($ssnLast4)
    {
        $this->ssnLast4 = $ssnLast4;

        return $this;
    }
}
