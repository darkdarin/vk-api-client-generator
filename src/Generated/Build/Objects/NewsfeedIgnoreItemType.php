<?php

namespace App\Api\Generated\Build\Objects;

enum NewsfeedIgnoreItemType: string
{
    case PostOnTheWall = 'wall';
    case TagOnAPhoto = 'tag';
    case ProfilePhoto = 'profilephoto';
    case Video = 'video';
    case Photo = 'photo';
    case Audio = 'audio';
}