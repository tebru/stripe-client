<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait DueBy
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DueBy
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $dueBy;

    /**
     * @return DateTime
     */
    public function getDueBy()
    {
        return $this->dueBy;
    }

    /**
     * @param DateTime $dueBy
     * @return $this
     */
    public function setDueBy(DateTime $dueBy)
    {
        $this->dueBy = $dueBy;

        return $this;
    }
}
