<?php

namespace App\Api\Generated\Build\Objects;

enum MessagesHistoryMessageAttachmentType: string
{
    case Photo = 'photo';
    case Video = 'video';
    case Audio = 'audio';
    case Doc = 'doc';
    case Link = 'link';
    case Market = 'market';
    case Wall = 'wall';
    case Share = 'share';
    case AppAction = 'app_action';
    case Graffiti = 'graffiti';
    case AudioMessage = 'audio_message';
}