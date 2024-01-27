<?php

namespace App\Api\Generated\Build\Objects\CallbackLikeAddRemove;

enum ObjectType: string
{
    case Video = 'video';
    case Photo = 'photo';
    case Post = 'post';
    case Comment = 'comment';
    case Note = 'note';
    case TopicComment = 'topic_comment';
    case PhotoComment = 'photo_comment';
    case VideoComment = 'video_comment';
    case Market = 'market';
    case MarketComment = 'market_comment';
}