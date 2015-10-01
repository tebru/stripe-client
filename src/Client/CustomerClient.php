<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Client;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Stripe\Model\Customers;
use Tebru\Stripe\Model\Customer;

/**
 * Interface CustomerClient
 *
 * Customer objects allow you to perform recurring charges and track multiple charges
 * that are associated with the same customer. The API allows you to create, delete, and
 * update your customers. You can retrieve individual customers as well as a list of all
 * your customers.
 *
 * @link https://stripe.com/docs/api#customers
 * @author Nate Brunette <n@tebru.net>
 *
 * @Rest\Returns("Tebru\Stripe\Model\Customer")
 */
interface CustomerClient
{
    /**
     * Creates a new customer object.
     *
     * @link https://stripe.com/docs/api#create_customer
     * @param Customer $customer
     * @return Customer
     *
     * @Rest\POST("/customers")
     * @Rest\Body("customer")
     * @Rest\Serializer\SerializationContext(groups={"CustomerCreate", "Shipping", "Source" })
     */
    public function create(Customer $customer = null);

    /**
     * Retrieves the details of an existing customer. You need only supply the unique
     * customer identifier that was returned upon customer creation.
     *
     * @link https://stripe.com/docs/api#retrieve_customer
     * @param string $customerId
     * @return Customer
     *
     * @Rest\GET("/customers/{customerId}")
     */
    public function get($customerId);

    /**
     * Updates the specified customer by setting the values of the parameters passed.
     * Any parameters not provided will be left unchanged. For example, if you pass
     * the source parameter, that becomes the customer's active source (e.g., a card)
     * to be used for all charges in the future. When you update a customer to a new
     * valid source: for each of the customer's current subscriptions, if the
     * subscription is in the past_due state, then the latest unpaid, unclosed invoice
     * for the subscription will be retried (note that this retry will not count as an
     * automatic retry, and will not affect the next regularly scheduled payment for
     * the invoice). (Note also that no invoices pertaining to subscriptions in the
     * unpaid state, or invoices pertaining to canceled subscriptions, will be retried
     * as a result of updating the customer's source.)
     *
     * This request accepts mostly the same arguments as the customer creation call.
     *
     * @link https://stripe.com/docs/api#update_customer
     * @param string $customerId
     * @param Customer $customer
     * @return Customer
     *
     * @Rest\POST("/customers/{customerId}")
     * @Rest\Body("customer")
     * @Rest\Serializer\SerializationContext(groups={"CustomerUpdate", "Shipping", "Source"})
     */
    public function update($customerId, Customer $customer = null);

    /**
     * Permanently deletes a customer. It cannot be undone. Also immediately cancels
     * any active subscriptions on the customer.
     *
     * @link https://stripe.com/docs/api#delete_customer
     * @param string $customerId
     * @return Customer
     *
     * @Rest\DELETE("/customers/{customerId}")
     */
    public function delete($customerId);

    /**
     * Returns a list of your customers. The customers are returned sorted by creation
     * date, with the most recent customers appearing first.
     *
     * @link https://stripe.com/docs/api#list_customers
     * @param array $listCustomersRequest
     * @return Customers
     *
     * @Rest\GET("/customers")
     * @Rest\QueryMap("listCustomersRequest")
     * @Rest\Returns("Tebru\Stripe\Model\Customers")
     */
    public function listAll(array $listCustomersRequest = []);
}
