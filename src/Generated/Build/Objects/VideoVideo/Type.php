<?php

namespace App\Api\Generated\Build\Objects\VideoVideo;

enum Type: string
{
    case Video = 'video';
    case MusicVideo = 'music_video';
    case Movie = 'movie';
    case Live = 'live';
    case ShortVideo = 'short_video';
}