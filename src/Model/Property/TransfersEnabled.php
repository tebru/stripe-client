<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait TransfersEnabled
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TransfersEnabled
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $transfersEnabled;

    /**
     * @return boolean
     */
    public function isTransfersEnabled()
    {
        return $this->transfersEnabled;
    }

    /**
     * @param boolean $transfersEnabled
     * @return $this
     */
    public function setTransfersEnabled($transfersEnabled)
    {
        $this->transfersEnabled = $transfersEnabled;

        return $this;
    }
}
