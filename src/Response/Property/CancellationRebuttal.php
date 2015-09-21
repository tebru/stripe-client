<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CancellationRebuttal
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CancellationRebuttal
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $cancellationRebuttal;

    /**
     * @return string
     */
    public function getCancellationRebuttal()
    {
        return $this->cancellationRebuttal;
    }

    /**
     * @param string $cancellationRebuttal
     * @return $this
     */
    public function setCancellationRebuttal($cancellationRebuttal)
    {
        $this->cancellationRebuttal = $cancellationRebuttal;

        return $this;
    }
}
