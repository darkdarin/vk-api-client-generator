<?php

namespace App\Api\Generated\Build\Objects;

enum MessagesMessageAttachmentType: string
{
    case Photo = 'photo';
    case Audio = 'audio';
    case Video = 'video';
    case VideoPlaylist = 'video_playlist';
    case Doc = 'doc';
    case Link = 'link';
    case Market = 'market';
    case MarketAlbum = 'market_album';
    case Gift = 'gift';
    case Sticker = 'sticker';
    case Wall = 'wall';
    case WallReply = 'wall_reply';
    case Article = 'article';
    case Poll = 'poll';
    case Call = 'call';
    case Graffiti = 'graffiti';
    case AudioMessage = 'audio_message';
}