<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait UncategorizedText
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait UncategorizedText
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $uncategorizedText;

    /**
     * @return string
     */
    public function getUncategorizedText()
    {
        return $this->uncategorizedText;
    }

    /**
     * @param string $uncategorizedText
     * @return $this
     */
    public function setUncategorizedText($uncategorizedText)
    {
        $this->uncategorizedText = $uncategorizedText;

        return $this;
    }
}
