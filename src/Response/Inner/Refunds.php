<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Refunds\Data;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;

/**
 * Class RefundsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Refunds
{
    use Object;
    use HasMore;
    use Url;
    use TotalCount;

    /**
     * @var Data[]
     *
     * @Type("array<Tebru\Stripe\Response\Inner\Refunds\Data>")
     */
    private $data;

    /**
     * @return Data[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param Data[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
