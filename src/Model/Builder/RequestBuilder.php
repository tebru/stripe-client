<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

/**
 * Class RequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
abstract class RequestBuilder
{
    public static function create()
    {
        return new static();
    }

    abstract public function build();
}
