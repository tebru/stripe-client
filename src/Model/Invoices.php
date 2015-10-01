<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Property;

/**
 * Class Invoices
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Invoices extends StripeList
{
    use Property\Error;

    /**
     * @var Invoice[]
     *
     *
     * @Type("array<Tebru\Stripe\Model\Invoice>")
     * @SerializedName("data")
     */
    private $invoices;

    /**
     * @return Invoice[]
     */
    public function getInvoices()
    {
        return $this->invoices;
    }

    /**
     * @param Invoice[] $invoices
     * @return $this
     */
    public function setInvoices(array $invoices)
    {
        $this->invoices = $invoices;

        return $this;
    }
}
