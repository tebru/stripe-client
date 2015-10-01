<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru;
use Tebru\Stripe\Model\Property;
use Tebru\Stripe\Model\TosAcceptance;

/**
 * Class TosAcceptanceBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TosAcceptanceBuilder extends RequestBuilder
{
    use Property\Date;
    use Property\Ip;
    use Property\UserAgent;

    public function build()
    {
        Tebru\assertNotNull($this->getDate(), 'Date is required');
        Tebru\assertNotNull($this->getIp(), 'Ip is required');

        $tosAcceptance = new TosAcceptance();
        $tosAcceptance->setDate($this->getDate());
        $tosAcceptance->setIp($this->getIp());
        $tosAcceptance->setUserAgent($this->getUserAgent());

        return $tosAcceptance;
    }
}
