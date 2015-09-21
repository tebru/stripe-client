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
 * Class Sources
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Sources
{
    use Object;
    use TotalCount;
    use HasMore;
    use Url;

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
