<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

/**
 * Class StripeResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
abstract class StripeResponse
{
    private $type;
    private $message;
    private $code;
    private $param;

    public function hasError()
    {
        return null !== $this->type;
    }

    public function getError()
    {
        return [
            'type' => $this->type,
            'message' => $this->message,
            'code' => $this->code,
            'param' => $this->param,
        ];
    }
}
