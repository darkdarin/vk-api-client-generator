<?php

namespace App\Api\Generated\Build\Objects;

enum MessagesTemplateActionTypeNames: string
{
    case Text = 'text';
    case Start = 'start';
    case Location = 'location';
    case Vkpay = 'vkpay';
    case OpenApp = 'open_app';
    case OpenPhoto = 'open_photo';
    case OpenLink = 'open_link';
    case Callback = 'callback';
    case IntentSubscribe = 'intent_subscribe';
    case IntentUnsubscribe = 'intent_unsubscribe';
    case OpenModalView = 'open_modal_view';
}