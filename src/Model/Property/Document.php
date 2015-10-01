<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Document
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Document
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"Verification"})
     */
    private $document;

    /**
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param string $document
     * @return $this
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }
}
