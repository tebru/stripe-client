<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class ProductResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Product
{
    use Property\Error;
    use Property\Id;
    use Property\Created;
    use Property\Updated;
    use Property\Object;
    use Property\LiveMode;
    use Property\Name;
    use Property\Caption;
    use Property\Description;
    use Property\Active;
    use Property\Attributes;
    use Property\Shippable;
    use Property\Metadata;
    use Property\Url;
    use Property\PackageDimensions;
    use Property\Images;
    use Property\SkusProperty;
}
