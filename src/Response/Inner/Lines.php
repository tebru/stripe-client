<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Lines\InvoiceLineItem;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;

/**
 * Class Lines
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Lines
{
    use Object;
    use TotalCount;
    use HasMore;
    use Url;

    /**
     * @var InvoiceLineItem[]
     *
     * @Type("array<Tebru\Stripe\Response\Inner\InvoiceLineItemResponse>")
     */
    private $data;

    /**
     * @return InvoiceLineItem[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param InvoiceLineItem[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
