<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CurrenciesSupported
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CurrenciesSupported
{
    /**
     * @var array
     *
     * @Type("array")
     */
    private $currenciesSupported = [];

    /**
     * @return array
     */
    public function getCurrenciesSupported()
    {
        return $this->currenciesSupported;
    }

    /**
     * @param array $currenciesSupported
     * @return $this
     */
    public function setCurrenciesSupported(array $currenciesSupported)
    {
        $this->currenciesSupported = $currenciesSupported;

        return $this;
    }
}
