<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DefaultCard
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DefaultCard
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $defaultCard;

    /**
     * @return string
     */
    public function getDefaultCard()
    {
        return $this->defaultCard;
    }

    /**
     * @param string $defaultCard
     * @return $this
     */
    public function setDefaultCard($defaultCard)
    {
        $this->defaultCard = $defaultCard;

        return $this;
    }
}
