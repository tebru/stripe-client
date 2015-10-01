<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class EvidenceDetails
 *
 * @author Nate Brunette <n@tebru.net>
 */
class EvidenceDetails
{
    use Property\DueBy;
    use Property\PastDue;
    use Property\HasEvidence;
    use Property\SubmissionCount;
}
