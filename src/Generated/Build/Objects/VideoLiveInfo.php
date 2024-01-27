<?php

namespace App\Api\Generated\Build\Objects;

readonly class VideoLiveInfo
{
    /**
     * @param mixed $enabled
     * @param mixed $is_notifications_blocked
     */
    public function __construct(public mixed $enabled, public mixed $is_notifications_blocked = NULL)
    {}
}