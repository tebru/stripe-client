<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait MetaData
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait FieldsNeeded
{
    /**
     * @var array
     *
     * @Type("array")
     */
    private $fieldsNeeded = [];

    /**
     * @return array
     */
    public function getFieldsNeeded()
    {
        return $this->fieldsNeeded;
    }

    /**
     * @param array $fieldsNeeded
     * @return $this
     */
    public function setFieldsNeeded(array $fieldsNeeded)
    {
        $this->fieldsNeeded = $fieldsNeeded;

        return $this;
    }
}
