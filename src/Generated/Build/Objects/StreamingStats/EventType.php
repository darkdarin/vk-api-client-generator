<?php

namespace App\Api\Generated\Build\Objects\StreamingStats;

enum EventType: string
{
    case Post = 'post';
    case Comment = 'comment';
    case Share = 'share';
}