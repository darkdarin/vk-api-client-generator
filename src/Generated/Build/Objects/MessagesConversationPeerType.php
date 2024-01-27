<?php

namespace App\Api\Generated\Build\Objects;

enum MessagesConversationPeerType: string
{
    case Chat = 'chat';
    case Email = 'email';
    case User = 'user';
    case Group = 'group';
}