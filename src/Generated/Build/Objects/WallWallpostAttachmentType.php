<?php

namespace App\Api\Generated\Build\Objects;

enum WallWallpostAttachmentType: string
{
    case Photo = 'photo';
    case PhotosList = 'photos_list';
    case PostedPhoto = 'posted_photo';
    case Audio = 'audio';
    case AudioPlaylist = 'audio_playlist';
    case Video = 'video';
    case VideoPlaylist = 'video_playlist';
    case Doc = 'doc';
    case Link = 'link';
    case Graffiti = 'graffiti';
    case Note = 'note';
    case App = 'app';
    case Poll = 'poll';
    case Page = 'page';
    case Album = 'album';
    case MarketAlbum = 'market_album';
    case Market = 'market';
    case Event = 'event';
    case DonutLink = 'donut_link';
    case Article = 'article';
    case Textlive = 'textlive';
    case Textpost = 'textpost';
    case TextpostPublish = 'textpost_publish';
    case SituationalTheme = 'situational_theme';
    case Group = 'group';
    case Sticker = 'sticker';
    case Podcast = 'podcast';
}