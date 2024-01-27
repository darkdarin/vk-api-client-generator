<?php

namespace App\Api\Generated\Build\Objects;

enum StoriesStoryType: string
{
    case Photo = 'photo';
    case Video = 'video';
    case LiveActive = 'live_active';
    case LiveFinished = 'live_finished';
}