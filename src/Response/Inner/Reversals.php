<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Property\HasMore;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TotalCount;
use Tebru\Stripe\Response\Property\Url;
use Tebru\Stripe\Response\TransferReversalResponse;

/**
 * Class Reversals
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Reversals
{
    use Object;
    use TotalCount;
    use HasMore;
    use Url;

    /**
     * @var TransferReversalResponse[]
     *
     * @Type("array<Tebru\Stripe\Response\TransferReversalResponse>")
     */
    private $transferReversal;

    /**
     * @return TransferReversalResponse[]
     */
    public function getTransferReversal()
    {
        return $this->transferReversal;
    }

    /**
     * @param TransferReversalResponse[] $transferReversal
     * @return $this
     */
    public function setTransferReversal(array $transferReversal)
    {
        $this->transferReversal = $transferReversal;

        return $this;
    }
}
