<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Lines
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Lines extends StripeList
{
    /**
     * @var InvoiceLineItem[]
     *
     * @Type("array<Tebru\Stripe\Model\InvoiceLineItem>")
     * @SerializedName("data")
     */
    private $invoiceLineItems;

    /**
     * @return InvoiceLineItem[]
     */
    public function getInvoiceLineItems()
    {
        return $this->invoiceLineItems;
    }

    /**
     * @param InvoiceLineItem[] $invoiceLineItems
     * @return $this
     */
    public function setInvoiceLineItems(array $invoiceLineItems)
    {
        $this->invoiceLineItems = $invoiceLineItems;

        return $this;
    }
}
