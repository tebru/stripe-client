<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait SourceTransaction
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SourceTransaction
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $sourceTransaction;

    /**
     * @return string
     */
    public function getSourceTransaction()
    {
        return $this->sourceTransaction;
    }

    /**
     * @param string $sourceTransaction
     * @return $this
     */
    public function setSourceTransaction($sourceTransaction)
    {
        $this->sourceTransaction = $sourceTransaction;

        return $this;
    }
}
