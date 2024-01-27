<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesAudioMessage
{
    /**
     * @param int $duration Audio message duration in seconds
     * @param int $id Audio message ID
     * @param string $link_mp3 MP3 file URL
     * @param string $link_ogg OGG file URL
     * @param int $owner_id Audio message owner ID
     * @param list<int> $waveform
     * @param string|null $access_key Access key for audio message
     * @param int|null $transcript_error
     */
    public function __construct(
        public int $duration,
        public int $id,
        public string $link_mp3,
        public string $link_ogg,
        public int $owner_id,
        public array $waveform,
        public ?string $access_key = NULL,
        public ?int $transcript_error = NULL
    ) {}
}