<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DisabledReason
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DisabledReason
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $disabledReason;

    /**
     * @return string
     */
    public function getDisabledReason()
    {
        return $this->disabledReason;
    }

    /**
     * @param string $disabledReason
     * @return $this
     */
    public function setDisabledReason($disabledReason)
    {
        $this->disabledReason = $disabledReason;

        return $this;
    }
}
