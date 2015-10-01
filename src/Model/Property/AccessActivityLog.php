<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AccessActivityLog
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AccessActivityLog
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $accessActivityLog;

    /**
     * @return string
     */
    public function getAccessActivityLog()
    {
        return $this->accessActivityLog;
    }

    /**
     * @param string $accessActivityLog
     * @return $this
     */
    public function setAccessActivityLog($accessActivityLog)
    {
        $this->accessActivityLog = $accessActivityLog;

        return $this;
    }
}
