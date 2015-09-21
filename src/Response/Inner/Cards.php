<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\CardResponse;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;

/**
 * Class Cards
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Cards
{
    use Object;
    use HasMore;
    use Url;
    use TotalCount;

    /**
     * @var CardResponse[]
     *
     * @Type("array<Tebru\Stripe\Response\CardResponse>")
     */
    private $data;

    /**
     * @return CardResponse[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param CardResponse[] $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }
}
