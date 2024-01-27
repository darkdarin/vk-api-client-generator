<?php

namespace App\Api\Generated\Build\Objects;

readonly class AudioAudio
{
    /**
     * @param string $artist Artist name
     * @param int $id Audio ID
     * @param int $owner_id Audio owner's ID
     * @param string $title Title
     * @param int $duration Duration in seconds
     * @param string|null $access_key Access key for the audio
     * @param string|null $url URL of mp3 file
     * @param int|null $date Date when uploaded
     * @param int|null $album_id Album ID
     * @param string|null $performer Performer name
     */
    public function __construct(
        public string $artist,
        public int $id,
        public int $owner_id,
        public string $title,
        public int $duration,
        public ?string $access_key = NULL,
        public ?string $url = NULL,
        public ?int $date = NULL,
        public ?int $album_id = NULL,
        public ?string $performer = NULL
    ) {}
}