<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Video live settings
 */
readonly class VideoLiveSettings
{
    /**
     * @param mixed $can_rewind If user car rewind live or not
     * @param mixed $is_endless If live is endless or not
     * @param int|null $max_duration Max possible time for rewind
     * @param mixed $is_clips_live If live in clips apps
     */
    public function __construct(
        public mixed $can_rewind = NULL,
        public mixed $is_endless = NULL,
        public ?int $max_duration = NULL,
        public mixed $is_clips_live = NULL
    ) {}
}