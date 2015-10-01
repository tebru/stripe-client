<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Client;

use Tebru\Retrofit\Annotation as Rest;
use Tebru\Stripe\Model\Card;
use Tebru\Stripe\Model\Cards;

/**
 * Interface CardClient
 *
 * You can store multiple cards on a customer in order to charge the customer later. You
 * can also store multiple debit cards on a recipient or a managed account in order to
 * transfer to those cards later.
 *
 * @link https://stripe.com/docs/api#cards
 * @author Nate Brunette <n@tebru.net>
 *
 * @Rest\Returns("Tebru\Stripe\Model\Card")
 */
interface CardClient
{
    /**
     * When you create a new credit card, you must specify a customer, recipient, or
     * managed account to create it on.
     *
     * If the card's owner has no default card, then the new card will become the
     * default. However, if the owner already has a default then it will not change.
     * To change the default, you should either update the customer to have a new
     * default_source, update the recipient to have a new default_card, or set
     * default_for_currency to true when creating a card for a managed account.
     *
     * @link https://stripe.com/docs/api#create_card
     * @param string $customerId
     * @param Card $card
     * @return Card
     *
     * @Rest\POST("/customers/{customerId}/sources")
     * @Rest\Body("card")
     * @Rest\Serializer\SerializationContext(groups={"CardCreate", "Source"})
     */
    public function create($customerId, Card $card);

    /**
     * You can always see the 10 most recent cards directly on a customer, recipient,
     * or managed account; this method lets you retrieve details about a specific card
     * stored on the customer, recipient, or account.
     *
     * @link https://stripe.com/docs/api#retrieve_card
     * @param string $customerId
     * @param string $cardId
     * @return Card
     *
     * @Rest\GET("/customers/{customerId}/sources/{cardId}")
     */
    public function get($customerId, $cardId);

    /**
     * If you need to update only some card details, like the billing address or expiration
     * date, you can do so without having to re-enter the full card details. Stripe also
     * works directly with card networks so that your customers can continue using your service
     * without interruption.
     *
     * When you update a card, Stripe will automatically validate the card.
     *
     * @link https://stripe.com/docs/api#update_card
     * @param string $customerId
     * @param string $cardId
     * @param Card $card
     * @return Card
     *
     * @Rest\POST("/customers/{customerId}/sources/{cardId}")
     * @Rest\Body("card")
     * @Rest\Serializer\SerializationContext(groups={"CardUpdate", "Card"})
     */
    public function update($customerId, $cardId, Card $card = null);

    /**
     * You can delete cards from a customer, recipient, or managed account.
     *
     * For customers: if you delete a card that is currently the default source, then the most
     * recently added source will become the new default. If you delete a card that is the
     * last remaining source on the customer then the default_source attribute will become null.
     *
     * For recipients: if you delete the default card, then the most recently added card will
     * become the new default. If you delete the last remaining card on a recipient, then the
     * default_card attribute will become null.
     *
     * For accounts: if a card's default_for_currency property is true, it can only be deleted
     * if it is the only external account for its currency, and the currency is not the Stripe
     * account's default currency. Otherwise, before deleting the card, you must set another
     * external account to be the default for the currency.
     *
     * Note that for cards belonging to customers, you may want to prevent customers on paid
     * subscriptions from deleting all cards on file so that there is at least one default
     * card for the next invoice payment attempt.
     *
     * @link https://stripe.com/docs/api#delete_card
     * @param string $customerId
     * @param string $cardId
     * @return Card
     *
     * @Rest\DELETE("/customers/{customerId}/sources/{cardId}")
     */
    public function delete($customerId, $cardId);

    /**
     * You can see a list of the cards belonging to a customer, recipient, or managed
     * account. Note that the 10 most recent sources are always available on the customer
     * object, and the 10 most recent external accounts are available on the account
     * object. If you need more than those 10, you can use this API method and the limit
     * and starting_after parameters to page through additional cards.
     *
     * @link https://stripe.com/docs/api#list_cards
     * @param string $customerId
     * @param array $listCardsRequest
     * @return Cards
     *
     * @Rest\GET("/customers/{customerId}/sources?object=card")
     * @Rest\QueryMap("listCardsRequest")
     * @Rest\Returns("Tebru\Stripe\Model\Cards")
     */
    public function listAll($customerId, array $listCardsRequest = []);
}
