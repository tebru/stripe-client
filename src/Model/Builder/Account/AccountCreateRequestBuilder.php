<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Account;

use Tebru;
use Tebru\Stripe\Model\Account;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Property\Country;
use Tebru\Stripe\Model\Property\Email;
use Tebru\Stripe\Model\Property\Managed;

/**
 * Class AccountCreateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class AccountCreateRequestBuilder extends RequestBuilder
{
    use Managed;
    use Country;
    use Email;

    public function build()
    {
        if (!$this->isManaged()) {
            Tebru\assertThat(null !== $this->getEmail(), 'If managed is false, email must be set');
        }

        $account = new Account();
        $account->setManaged($this->isManaged());
        $account->setCountry($this->getCountry());
        $account->setEmail($this->getEmail());

        return $account;
    }
}
