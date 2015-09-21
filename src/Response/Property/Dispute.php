<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\DisputeResponse;

/**
 * Trait Dispute
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Dispute
{
    /**
     * @var DisputeResponse
     *
     * @Type("Tebru\Stripe\Response\DisputeResponse")
     */
    private $dispute;

    /**
     * @return DisputeResponse
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    /**
     * @param DisputeResponse $dispute
     * @return $this
     */
    public function setDispute(DisputeResponse $dispute)
    {
        $this->dispute = $dispute;

        return $this;
    }
}
