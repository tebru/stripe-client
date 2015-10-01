<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class AdditionalOwners
 *
 * @author Nate Brunette <n@tebru.net>
 */
class AdditionalOwners
{
    use Property\AddressObject;
    use Property\DobObject;
    use Property\VerificationObject;
    use Property\FirstName;
    use Property\LastName;
}
