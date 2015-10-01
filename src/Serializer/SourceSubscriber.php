<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Serializer;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;

/**
 * Class SourceSubscriber
 *
 * @author Nate Brunette <n@tebru.net>
 */
class SourceSubscriber implements EventSubscriberInterface
{

    /**
     * Returns the events to which this class has subscribed.
     *
     * Return format:
     *     array(
     *         array('event' => 'the-event-name', 'method' => 'onEventName', 'class' => 'some-class', 'format' => 'json'),
     *         array(...),
     *     )
     *
     * The class may be omitted if the class wants to subscribe to events of all classes.
     * Same goes for the format key.
     *
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            ['event' => 'serializer.pre_serialize', 'method' => 'onPreSerialize'],
            ['event' => 'serializer.pre_deserialize', 'method' => 'onPreDeserialize'],
        ];
    }

    public function onPreSerialize(PreSerializeEvent $event)
    {
        if ('source' !== $event->getType()['name']) {
            return null;
        }

        $type = (is_string($event->getObject())) ? 'string' : 'Tebru\Stripe\Model\Card';
        $event->setType($type);
    }

    public function onPreDeserialize(PreDeserializeEvent $event)
    {
        if ('source' !== $event->getType()['name']) {
            return null;
        }

        $type = (is_string($event->getData())) ? 'string' : 'Tebru\Stripe\Model\Card';
        $event->setType($type);
    }
}
