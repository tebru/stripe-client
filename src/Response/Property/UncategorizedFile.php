<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait UncategorizedFile
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait UncategorizedFile
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $uncategorizedFile;

    /**
     * @return string
     */
    public function getUncategorizedFile()
    {
        return $this->uncategorizedFile;
    }

    /**
     * @param string $uncategorizedFile
     * @return $this
     */
    public function setUncategorizedFile($uncategorizedFile)
    {
        $this->uncategorizedFile = $uncategorizedFile;

        return $this;
    }
}
