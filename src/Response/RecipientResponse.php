<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\DefaultCard;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Email;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\ActiveAccountProperty;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\MigratedTo;
use Tebru\Stripe\Response\Property\Name;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Type;
use Tebru\Stripe\Response\Property\Verified;

/**
 * Class RecipientResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class RecipientResponse extends StripeResponse
{
    use Id;
    use Object;
    use Created;
    use LiveMode;
    use Type;
    use Description;
    use Email;
    use Name;
    use Verified;
    use MetaData;
    use ActiveAccountProperty;
    use CardsProperty;
    use DefaultCard;
    use MigratedTo;
}
