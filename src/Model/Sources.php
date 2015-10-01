<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Property;

/**
 * Class Sources
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Sources extends StripeList
{
    /**
     * @var Card[]
     *
     * @Type("array<Tebru\Stripe\Model\Card>")
     * @SerializedName("data")
     */
    private $sources;

    /**
     * @return Card[]
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * @param Card[] $sources
     * @return $this
     */
    public function setSources(array $sources)
    {
        $this->sources = $sources;

        return $this;
    }
}
