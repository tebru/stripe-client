<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Client;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Stripe\Model\Charge;
use Tebru\Stripe\Model\Charges;

/**
 * Interface ChargeClient
 *
 * To charge a credit or a debit card, you create a charge object. You can retrieve and refund
 * individual charges as well as list all charges. Charges are identified by a unique random ID.
 *
 * @link https://stripe.com/docs/api#charges
 * @author Nate Brunette <n@tebru.net>
 *
 * @Rest\Returns("Tebru\Stripe\Model\Charge")
 */
interface ChargeClient
{
    /**
     * To charge a credit card, you create a charge object. If your API key is in test mode,
     * the supplied payment source (e.g., card or Bitcoin receiver) won't actually be charged,
     * though everything else will occur as if in live mode. (Stripe assumes that the charge
     * would have completed successfully).
     *
     * @link https://stripe.com/docs/api/curl#create_charge
     * @param Charge $charge
     * @return Charge
     *
     * @Rest\POST("/charges")
     * @Rest\Body("charge")
     * @Rest\Serializer\SerializationContext(groups={"ChargeCreate", "Shipping", "Source"})
     */
    public function create(Charge $charge);

    /**
     * Retrieves the details of a charge that has previously been created. Supply the unique
     * charge ID that was returned from your previous request, and Stripe will return the
     * corresponding charge information. The same information is returned when creating or
     * refunding the charge.
     *
     * @link https://stripe.com/docs/api/curl#retrieve_charge
     * @param string $chargeId
     * @return Charge
     *
     * @Rest\GET("/charges/{chargeId}")
     */
    public function get($chargeId);

    /**
     * Updates the specified charge by setting the values of the parameters passed. Any
     * parameters not provided will be left unchanged.
     *
     * This request accepts only the description, metadata, receipt_emailand fraud_details
     * as arguments.
     *
     * @link https://stripe.com/docs/api/curl#update_charge
     * @param string $chargeId
     * @param Charge $charge
     * @return Charge
     *
     * @Rest\POST("/charges/{chargeId}")
     * @Rest\Body("charge")
     * @Rest\Serializer\SerializationContext(groups={"ChargeUpdate", "Shipping"})
     */
    public function update($chargeId, Charge $charge = null);

    /**
     * Capture the payment of an existing, uncaptured, charge. This is the second half of
     * the two-step payment flow, where first you created a charge with the capture option
     * set to false.
     *
     * Uncaptured payments expire exactly seven days after they are created. If they are
     * not captured by that point in time, they will be marked as refunded and will no
     * longer be capturable.
     *
     * @link https://stripe.com/docs/api/curl#capture_charge
     * @param string $chargeId
     * @param Charge $charge
     * @return Charge
     *
     * @Rest\POST("/charges/{chargeId}/capture")
     * @Rest\Body("charge")
     * @Rest\Serializer\SerializationContext(groups={"ChargeCapture"})
     */
    public function capture($chargeId, Charge $charge = null);

    /**
     * Returns a list of charges you’ve previously created. The charges are returned in
     * sorted order, with the most recent charges appearing first.
     *
     * @link https://stripe.com/docs/api/php#list_charges
     * @param array $listChargeRequest
     * @return Charges
     *
     * @Rest\GET("/charges")
     * @Rest\QueryMap("listChargeRequest")
     * @Rest\Returns("Tebru\Stripe\Model\Charges")
     */
    public function listAll(array $listChargeRequest = []);
}
