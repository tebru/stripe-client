<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use Tebru\Stripe\Response\Property\DueBy;
use Tebru\Stripe\Response\Property\HasEvidence;
use Tebru\Stripe\Response\Property\PastDue;
use Tebru\Stripe\Response\Property\SubmissionCount;

/**
 * Class EvidenceDetails
 *
 * @author Nate Brunette <n@tebru.net>
 */
class EvidenceDetails
{
    use DueBy;
    use PastDue;
    use HasEvidence;
    use SubmissionCount;
}
