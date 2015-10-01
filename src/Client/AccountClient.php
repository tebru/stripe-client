<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Client;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Stripe\Model\Account;
use Tebru\Stripe\Model\Accounts;

/**
 * Interface AccountClient
 *
 * This is an object representing your Stripe account. You can retrieve it to see properties
 * on the account like its current e-mail address or if the account is enabled yet to make
 * live charges.
 *
 * Some properties, marked as "managed accounts only", are only available to platforms who
 * want to create and manage Stripe accounts.
 *
 * @link https://stripe.com/docs/api#account
 * @author Nate Brunette <n@tebru.net>
 *
 * @Rest\Returns("Tebru\Stripe\Model\Account")
 */
interface AccountClient
{
    /**
     * With Connect, you can create Stripe accounts for your users. To do this, you'll
     * first need to register your platform.
     *
     * @link https://stripe.com/docs/api#create_account
     * @param Account $account
     * @return Account
     *
     * @Rest\POST("/accounts")
     * @Rest\Body("account")
     * @Rest\Serializer\SerializationContext(groups={"AccountCreate"})
     */
    public function create(Account $account);

    /**
     * Retrieves the details of the account.
     *
     * @link https://stripe.com/docs/api#retrieve_account
     * @param string $accountId
     * @return Account
     *
     * @Rest\GET("/accounts/{accountId}")
     */
    public function get($accountId);

    /**
     * Updates an account by setting the values of the parameters passed. Any parameters
     * not provided will be left unchanged.
     *
     * You may only update accounts that you manage. To update your own account, you can
     * currently only do so via the dashboard. For more information on updating managed
     * accounts, see our guide.
     *
     * @link https://stripe.com/docs/api#update_account
     * @param string $accountId
     * @param Account $account
     * @return Account
     *
     * @Rest\POST("/accounts/{accountId}")
     * @Rest\Body("account")
     * @Rest\Serializer\SerializationContext(groups={
     *     "AccountUpdate", "DeclineChargeOn", "ExternalAccount", "LegalEntity", "TosAcceptance", "TransferSchedule",
     *     "Address", "Dob", "Verification", "AdditionalOwners"
     * })
     */
    public function update($accountId, Account $account);

    /**
     * With Connect, you may delete Stripe accounts you manage.
     *
     * Managed accounts created using test-mode keys can be deleted at any time. Managed
     * accounts created using live-mode keys may only be deleted once all balances are
     * zero.
     *
     * If you are looking to close your own account, use the data tab in your account
     * settings instead.
     *
     * @link https://stripe.com/docs/api#delete_account
     * @param string $accountId
     * @return Account
     *
     * @Rest\DELETE("/accounts/{accountId}")
     */
    public function delete($accountId);

    /**
     * Returns a list of accounts connected to your platform via Connect. If you’re not
     * a platform, the list will be empty.
     *
     * @link https://stripe.com/docs/api#list_accounts
     * @param array $listAccountsRequest
     * @return Accounts
     *
     * @Rest\GET("/accounts")
     * @Rest\QueryMap("listAccountsRequest")
     * @Rest\Returns("Tebru\Stripe\Model\Accounts")
     */
    public function listAll(array $listAccountsRequest);
}
