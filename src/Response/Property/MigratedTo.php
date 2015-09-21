<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait MigratedTo
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait MigratedTo
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $migratedTo;

    /**
     * @return string
     */
    public function getMigratedTo()
    {
        return $this->migratedTo;
    }

    /**
     * @param string $migratedTo
     * @return $this
     */
    public function setMigratedTo($migratedTo)
    {
        $this->migratedTo = $migratedTo;

        return $this;
    }
}
