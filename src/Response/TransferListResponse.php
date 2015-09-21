<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;

/**
 * Class TransferListResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TransferListResponse extends StripeResponse
{
    use Object;
    use Url;
    use HasMore;
    use TotalCount;

    /**
     * @var TransferResponse[]
     *
     *
     * @Type("array<Tebru\Stripe\Response\TransferResponse>")
     */
    private $data;

    /**
     * @return TransferResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param TransferResponse[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
