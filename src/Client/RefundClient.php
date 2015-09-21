<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Client;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Stripe\Response\RefundListResponse;
use Tebru\Stripe\Response\RefundResponse;

/**
 * Interface RefundClient
 *
 * @author Nate Brunette <n@tebru.net>
 *
 * @Rest\Returns("Tebru\Stripe\Response\RefundResponse")
 */
interface RefundClient
{
    /**
     * Retrieves the details of an existing refund.
     *
     * @link https://stripe.com/docs/api/php#retrieve_refund
     * @param $refundId
     * @return RefundResponse
     *
     * @Rest\GET("/refunds/{refundId}")
     */
    public function get($refundId);

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
     * @param array $createRefundRequest
     * @return RefundResponse
     *
     * @Rest\POST("/charges/{chargeId}/refunds")
     * @Rest\Body("createRefundRequest")
     */
    public function create($chargeId, array $createRefundRequest);

    /**
     * Updates the specified refund by setting the values of the parameters passed. Any
     * parameters not provided will be left unchanged.
     *
     * This request only accepts metadata as an argument.
     *
     * @link https://stripe.com/docs/api/curl#update_refund
     * @param string $refundId
     * @param array $updateRefundRequest
     * @return RefundResponse
     *
     * @Rest\POST("/refunds/{refundId}")
     * @Rest\Body("updateRefundRequest")
     */
    public function update($refundId, array $updateRefundRequest);

    /**
     * Returns a list of all refunds you’ve previously created. The refunds are returned
     * in sorted order, with the most recent refunds appearing first. For convenience,
     * the 10 most recent refunds are always available by default on the charge object
     *
     * @link https://stripe.com/docs/api/curl#list_refunds
     * @param array $listRefundsRequest
     * @return RefundListResponse
     *
     * @Rest\GET("/refunds")
     * @Rest\QueryMap("listRefundsRequest")
     * @Rest\Returns("Tebru\Stripe\Response\RefundListResponse")
     */
    public function listAll(array $listRefundsRequest);
}
