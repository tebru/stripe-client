<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait End
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait End
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $end;

    /**
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     * @return $this
     */
    public function setEnd(DateTime $end)
    {
        $this->end = $end;

        return $this;
    }
}
