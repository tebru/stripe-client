<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe;

use Tebru\Retrofit\Adapter\Rest\RestAdapter;
use Tebru\Stripe\Client\AccountClient;
use Tebru\Stripe\Client\CardClient;
use Tebru\Stripe\Client\ChargeClient;
use Tebru\Stripe\Client\CustomerClient;
use Tebru\Stripe\Client\RefundClient;

/**
 * Class Stripe
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Stripe
{
    /**
     * @var RestAdapter
     */
    private $restAdapter;

    /**
     * @var ChargeClient
     */
    private $chargeClient;

    /**
     * @var RefundClient
     */
    private $refundClient;

    /**
     * @var CustomerClient
     */
    private $customerClient;

    /**
     * @var CardClient
     */
    private $cardClient;

    /**
     * @var AccountClient
     */
    private $accountClient;

    public function __construct(RestAdapter $restAdapter)
    {
        $this->restAdapter = $restAdapter;
    }

    /**
     * @return ChargeClient
     * @throws \Tebru\Retrofit\Exception\RetrofitException
     */
    public function charge()
    {
        if (null === $this->chargeClient) {
            $this->chargeClient = $this->restAdapter->create('Tebru\Stripe\Client\ChargeClient');
        }

        return $this->chargeClient;
    }

    public function refund()
    {
        if (null === $this->refundClient) {
            $this->refundClient = $this->restAdapter->create('Tebru\Stripe\Client\RefundClient');
        }

        return $this->refundClient;
    }

    public function customer()
    {
        if (null === $this->customerClient) {
            $this->customerClient = $this->restAdapter->create('Tebru\Stripe\Client\CustomerClient');
        }

        return $this->customerClient;
    }

    public function card()
    {
        if (null === $this->cardClient) {
            $this->cardClient = $this->restAdapter->create('Tebru\Stripe\Client\CardClient');
        }

        return $this->cardClient;
    }

    public function account()
    {
        if (null === $this->accountClient) {
            $this->accountClient = $this->restAdapter->create('Tebru\Stripe\Client\AccountClient');
        }

        return $this->accountClient;
    }
}
