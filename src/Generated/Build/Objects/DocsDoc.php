<?php

namespace App\Api\Generated\Build\Objects;

readonly class DocsDoc
{
    /**
     * @param int $id Document ID
     * @param int $owner_id Document owner ID
     * @param string $title Document title
     * @param int $size File size in bites
     * @param string $ext File extension
     * @param int $date Date when file has been uploaded in Unixtime
     * @param int $type Document type
     * @param string|null $url File URL
     * @param mixed $preview
     * @param mixed $is_licensed
     * @param string|null $access_key Access key for the document
     * @param list<string>|null $tags Document tags
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public string $title,
        public int $size,
        public string $ext,
        public int $date,
        public int $type,
        public ?string $url = NULL,
        public mixed $preview = NULL,
        public mixed $is_licensed = NULL,
        public ?string $access_key = NULL,
        public ?array $tags = NULL
    ) {}
}