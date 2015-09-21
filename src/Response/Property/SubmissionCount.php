<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait SubmissionCount
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SubmissionCount
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $submissionCount;

    /**
     * @return integer
     */
    public function getSubmissionCount()
    {
        return $this->submissionCount;
    }

    /**
     * @param int $submissionCount
     * @return $this
     */
    public function setSubmissionCount($submissionCount)
    {
        $this->submissionCount = $submissionCount;

        return $this;
    }
}
