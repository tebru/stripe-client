<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Verification
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Verification
{
    use Property\Status;
    use Property\Details;
    use Property\Document;
}
