<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\VideoVideoAlbum\ResponseType;

readonly class VideoVideoAlbum
{
    /**
     * @param int $id Album ID
     * @param int $owner_id Album owner's ID
     * @param string $title Album title
     * @param string|null $track_code Album trackcode
     * @param ResponseType|null $response_type
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public string $title,
        public ?string $track_code = NULL,
        public ?ResponseType $response_type = NULL
    ) {}
}