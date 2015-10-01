<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Error
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Error
{
    /**
     * @var array
     *
     * @Type("array")
     */
    private $error;

    public function hasError()
    {
        return null !== $this->error;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError(array $error)
    {
        $this->error = $error;
    }
}
