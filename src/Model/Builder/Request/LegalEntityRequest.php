<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Request;

use Tebru\Stripe\Model\Property;

/**
 * Class LegalEntityRequest
 *
 * @author Nate Brunette <n@tebru.net>
 */
class LegalEntityRequest
{
    use Property\BusinessTaxId;
    use Property\BusinessVatId;
    use Property\PersonalIdNumber;
    use Property\SsnLast4;
}
