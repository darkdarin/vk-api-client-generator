<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDocPreview
{
    /**
     * @param mixed $audio_msg
     * @param mixed $graffiti
     * @param mixed $photo
     * @param mixed $video
     */
    public function __construct(
        public mixed $audio_msg = NULL,
        public mixed $graffiti = NULL,
        public mixed $photo = NULL,
        public mixed $video = NULL
    ) {}
}