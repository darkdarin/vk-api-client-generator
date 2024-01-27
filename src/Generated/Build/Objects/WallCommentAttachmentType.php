<?php

namespace App\Api\Generated\Build\Objects;

enum WallCommentAttachmentType: string
{
    case Photo = 'photo';
    case Audio = 'audio';
    case AudioPlaylist = 'audio_playlist';
    case Video = 'video';
    case Doc = 'doc';
    case Link = 'link';
    case Note = 'note';
    case Page = 'page';
    case MarketMarketAlbum = 'market_market_album';
    case Market = 'market';
    case Sticker = 'sticker';
    case Graffiti = 'graffiti';
}