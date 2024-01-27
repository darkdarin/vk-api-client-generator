<?php

namespace App\Api\Generated\Build\Objects;

enum WallPostType: string
{
    case Post = 'post';
    case Copy = 'copy';
    case Reply = 'reply';
    case Postpone = 'postpone';
    case Suggest = 'suggest';
    case PostAds = 'post_ads';
    case Photo = 'photo';
    case Video = 'video';
}