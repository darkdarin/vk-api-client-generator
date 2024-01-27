<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallWallpostAttachment
{
    /**
     * @param mixed $type
     * @param string|null $access_key Access key for the audio
     * @param mixed $album
     * @param mixed $app
     * @param mixed $audio
     * @param mixed $doc
     * @param mixed $event
     * @param mixed $group
     * @param mixed $graffiti
     * @param mixed $link
     * @param mixed $market
     * @param mixed $market_album
     * @param mixed $note
     * @param mixed $page
     * @param mixed $photo
     * @param mixed $poll
     * @param mixed $posted_photo
     * @param mixed $video
     * @param mixed $video_playlist
     */
    public function __construct(
        public mixed $type,
        public ?string $access_key = NULL,
        public mixed $album = NULL,
        public mixed $app = NULL,
        public mixed $audio = NULL,
        public mixed $doc = NULL,
        public mixed $event = NULL,
        public mixed $group = NULL,
        public mixed $graffiti = NULL,
        public mixed $link = NULL,
        public mixed $market = NULL,
        public mixed $market_album = NULL,
        public mixed $note = NULL,
        public mixed $page = NULL,
        public mixed $photo = NULL,
        public mixed $poll = NULL,
        public mixed $posted_photo = NULL,
        public mixed $video = NULL,
        public mixed $video_playlist = NULL
    ) {}
}