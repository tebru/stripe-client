<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait StatementDescriptor
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait StatementDescriptor
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"ChargeCreate", "ChargeCapture", "AccountUpdate"})
     */
    private $statementDescriptor;

    /**
     * @return string
     */
    public function getStatementDescriptor()
    {
        return $this->statementDescriptor;
    }

    /**
     * @param string $statementDescriptor
     * @return $this
     */
    public function setStatementDescriptor($statementDescriptor)
    {
        $this->statementDescriptor = $statementDescriptor;

        return $this;
    }
}
