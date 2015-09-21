<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait Created
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Created
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $created;

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return $this
     */
    public function setCreated(DateTime $created)
    {
        $this->created = $created;

        return $this;
    }
}
