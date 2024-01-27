<?php

namespace App\Api\Generated\Build\Objects\AdsStatisticClickAction;

enum Type: string
{
    case Load = 'load';
    case Impression = 'impression';
    case ClickDeeplink = 'click_deeplink';
    case Click = 'click';
    case ClickPostOwner = 'click_post_owner';
    case ClickPostLink = 'click_post_link';
    case ClickPrettyCard = 'click_pretty_card';
    case LikePost = 'like_post';
    case SharePost = 'share_post';
    case VideoStart = 'video_start';
    case VideoPause = 'video_pause';
    case VideoResume = 'video_resume';
    case VideoPlay3s = 'video_play_3s';
    case VideoPlay10s = 'video_play_10s';
    case VideoPlay25 = 'video_play_25';
    case VideoPlay50 = 'video_play_50';
    case VideoPlay75 = 'video_play_75';
    case VideoPlay95 = 'video_play_95';
    case VideoPlay100 = 'video_play_100';
    case VideoVolumeOn = 'video_volume_on';
    case VideoVolumeOff = 'video_volume_off';
    case VideoFullscreenOn = 'video_fullscreen_on';
    case VideoFullscreenOff = 'video_fullscreen_off';
    case Hide = 'hide';
}