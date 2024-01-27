<?php

namespace App\Api\Generated\Build\Objects;

enum LikesType: string
{
    case Post = 'post';
    case Comment = 'comment';
    case Photo = 'photo';
    case Audio = 'audio';
    case Video = 'video';
    case Note = 'note';
    case Market = 'market';
    case PhotoComment = 'photo_comment';
    case VideoComment = 'video_comment';
    case TopicComment = 'topic_comment';
    case MarketComment = 'market_comment';
    case Sitepage = 'sitepage';
    case Textpost = 'textpost';
    case CommunityReview = 'community_review';
    case Story = 'story';
    case GroupLike = 'group_like';
}