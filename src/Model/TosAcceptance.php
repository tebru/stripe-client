<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class TosAcceptance
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TosAcceptance
{
    use Property\Date;
    use Property\Ip;
    use Property\UserAgent;
}
