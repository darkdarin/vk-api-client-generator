<?php

namespace App\Api\Generated\Build\Objects\StoriesClickableSticker;

enum Type: string
{
    case Hashtag = 'hashtag';
    case Mention = 'mention';
    case Link = 'link';
    case Question = 'question';
    case Place = 'place';
    case MarketItem = 'market_item';
    case Music = 'music';
    case StoryReply = 'story_reply';
    case Owner = 'owner';
    case Post = 'post';
    case Poll = 'poll';
    case Sticker = 'sticker';
    case App = 'app';
    case SituationalTheme = 'situational_theme';
    case Playlist = 'playlist';
    case Clip = 'clip';
}