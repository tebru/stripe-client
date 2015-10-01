<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Client;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Stripe\Model\Refund;
use Tebru\Stripe\Model\Refunds;

/**
 * Interface RefundClient
 *
 * Refund objects allow you to refund a charge that has previously been created but not
 * yet refunded. Funds will be refunded to the credit or debit card that was originally
 * charged. The fees you were originally charged are also refunded.
 *
 * @link https://stripe.com/docs/api#refunds
 * @author Nate Brunette <n@tebru.net>
 *
 * @Rest\Returns("Tebru\Stripe\Model\Refund")
 */
interface RefundClient
{
    /**
     * When you create a new refund, you must specify a charge to create it on.
     *
     * Creating a new refund will refund a charge that has previously been created but
     * not yet refunded. Funds will be refunded to the credit or debit card that was
     * originally charged. The fees you were originally charged are also refunded.
     *
     * You can optionally refund only part of a charge. You can do so as many times as
     * you wish until the entire charge has been refunded.
     *
     * Once entirely refunded, a charge can't be refunded again. This method will return
     * an error when called on an already-refunded charge, or when trying to refund more
     * money than is left on a charge.
     *
     * @link https://stripe.com/docs/api/curl#create_refund
     * @param string $chargeId
     * @param Refund $refund
     * @return Refund
     *
     * @Rest\POST("/charges/{chargeId}/refunds")
     * @Rest\Body("refund")
     * @Rest\Serializer\SerializationContext(groups={"RefundCreate"})
     */
    public function create($chargeId, Refund $refund = null);

    /**
     * Retrieves the details of an existing refund.
     *
     * @link https://stripe.com/docs/api/php#retrieve_refund
     * @param $refundId
     * @return Refund
     *
     * @Rest\GET("/refunds/{refundId}")
     */
    public function get($refundId);

    /**
     * Updates the specified refund by setting the values of the parameters passed. Any
     * parameters not provided will be left unchanged.
     *
     * This request only accepts metadata as an argument.
     *
     * @link https://stripe.com/docs/api/curl#update_refund
     * @param string $refundId
     * @param Refund $refund
     * @return Refund
     *
     * @Rest\POST("/refunds/{refundId}")
     * @Rest\Body("refund")
     * @Rest\Serializer\SerializationContext(groups={"RefundUpdate"})
     */
    public function update($refundId, Refund $refund = null);

    /**
     * Returns a list of all refunds you’ve previously created. The refunds are returned
     * in sorted order, with the most recent refunds appearing first. For convenience,
     * the 10 most recent refunds are always available by default on the charge object
     *
     * @link https://stripe.com/docs/api/curl#list_refunds
     * @param array $listRefundsRequest
     * @return Refunds
     *
     * @Rest\GET("/refunds")
     * @Rest\QueryMap("listRefundsRequest")
     * @Rest\Returns("Tebru\Stripe\Model\Refunds")
     */
    public function listAll(array $listRefundsRequest = []);
}
