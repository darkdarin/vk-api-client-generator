<?php

namespace App\Api\Generated\Build\Objects;

enum FaveBookmarkType: string
{
    case Post = 'post';
    case Video = 'video';
    case Product = 'product';
    case Article = 'article';
    case Link = 'link';
    case Clip = 'clip';
}