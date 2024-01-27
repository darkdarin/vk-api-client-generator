<?php

namespace App\Api\Generated\Build\Objects;

enum NewsfeedNewsfeedItemType: string
{
    case Post = 'post';
    case Photo = 'photo';
    case PhotoTag = 'photo_tag';
    case WallPhoto = 'wall_photo';
    case Friend = 'friend';
    case Audio = 'audio';
    case Video = 'video';
    case Topic = 'topic';
    case Digest = 'digest';
    case Stories = 'stories';
    case Note = 'note';
    case AudioPlaylist = 'audio_playlist';
    case Clip = 'clip';
}