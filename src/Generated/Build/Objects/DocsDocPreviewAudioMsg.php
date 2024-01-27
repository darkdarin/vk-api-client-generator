<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDocPreviewAudioMsg
{
    /**
     * @param int $duration Audio message duration in seconds
     * @param string $link_mp3 MP3 file URL
     * @param string $link_ogg OGG file URL
     * @param list<int> $waveform
     */
    public function __construct(
        public int $duration,
        public string $link_mp3,
        public string $link_ogg,
        public array $waveform
    ) {}
}