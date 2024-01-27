<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallCommentAttachment
{
    /**
     * @param mixed $type
     * @param mixed $audio
     * @param mixed $doc
     * @param mixed $link
     * @param mixed $market
     * @param mixed $market_market_album
     * @param mixed $note
     * @param mixed $page
     * @param mixed $photo
     * @param mixed $sticker
     * @param mixed $video
     * @param mixed $graffiti
     */
    public function __construct(
        public mixed $type,
        public mixed $audio = NULL,
        public mixed $doc = NULL,
        public mixed $link = NULL,
        public mixed $market = NULL,
        public mixed $market_market_album = NULL,
        public mixed $note = NULL,
        public mixed $page = NULL,
        public mixed $photo = NULL,
        public mixed $sticker = NULL,
        public mixed $video = NULL,
        public mixed $graffiti = NULL
    ) {}
}