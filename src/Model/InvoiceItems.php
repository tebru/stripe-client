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
 * Class InvoiceItemListResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class InvoiceItems extends StripeList
{
    use Property\Error;

    /**
     * @var InvoiceItem[]
     *
     *
     * @Type("array<Tebru\Stripe\Model\InvoiceItem>")
     * @SerializedName("data")
     */
    private $invoiceItems;

    /**
     * @return InvoiceItem[]
     */
    public function getInvoiceItems()
    {
        return $this->invoiceItems;
    }

    /**
     * @param InvoiceItem[] $invoiceItems
     * @return $this
     */
    public function setInvoiceItems(array $invoiceItems)
    {
        $this->invoiceItems = $invoiceItems;

        return $this;
    }
}
