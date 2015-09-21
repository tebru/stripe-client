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
 * Class DisputeListResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class DisputeListResponse extends StripeResponse
{
    use Object;
    use Url;
    use HasMore;
    use TotalCount;

    /**
     * @var DisputeResponse[]
     *
     *
     * @Type("array<Tebru\Stripe\Response\DisputeResponse>")
     */
    private $data;

    /**
     * @return DisputeResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param DisputeResponse[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
