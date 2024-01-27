<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesHistoryMessageAttachment
{
    /**
     * @param mixed $type
     * @param mixed $audio
     * @param mixed $audio_message
     * @param mixed $doc
     * @param mixed $graffiti
     * @param mixed $market
     * @param mixed $photo
     */
    public function __construct(
        public mixed $type,
        public mixed $audio = NULL,
        public mixed $audio_message = NULL,
        public mixed $doc = NULL,
        public mixed $graffiti = NULL,
        public mixed $market = NULL,
        public mixed $photo = NULL
    ) {}
}