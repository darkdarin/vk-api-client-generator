<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesMessageAttachment
{
    /**
     * @param mixed $type
     * @param mixed $audio
     * @param mixed $audio_message
     * @param mixed $call
     * @param mixed $doc
     * @param mixed $gift
     * @param mixed $graffiti
     * @param mixed $market
     * @param mixed $market_market_album
     * @param mixed $photo
     * @param mixed $sticker
     * @param mixed $story
     * @param mixed $wall_reply
     * @param mixed $poll
     */
    public function __construct(
        public mixed $type,
        public mixed $audio = NULL,
        public mixed $audio_message = NULL,
        public mixed $call = NULL,
        public mixed $doc = NULL,
        public mixed $gift = NULL,
        public mixed $graffiti = NULL,
        public mixed $market = NULL,
        public mixed $market_market_album = NULL,
        public mixed $photo = NULL,
        public mixed $sticker = NULL,
        public mixed $story = NULL,
        public mixed $wall_reply = NULL,
        public mixed $poll = NULL
    ) {}
}