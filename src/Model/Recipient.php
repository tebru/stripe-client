<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Recipient
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Recipient
{
    use Property\Id;
    use Property\Object;
    use Property\Created;
    use Property\LiveMode;
    use Property\StripeType;
    use Property\Description;
    use Property\Email;
    use Property\Name;
    use Property\Verified;
    use Property\Metadata;
    use Property\ActiveAccount;
    use Property\Cards;
    use Property\DefaultCardId;
    use Property\MigratedTo;
}
