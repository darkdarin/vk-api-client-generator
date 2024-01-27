<?php

namespace App\Api\Generated\Build\Objects;

enum NewsfeedCommentsFilters: string
{
    case Post = 'post';
    case Photo = 'photo';
    case Video = 'video';
    case Topic = 'topic';
    case Note = 'note';
}