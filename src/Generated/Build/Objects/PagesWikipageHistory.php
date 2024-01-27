<?php

namespace App\Api\Generated\Build\Objects;

readonly class PagesWikipageHistory
{
    /**
     * @param int $id Version ID
     * @param int $length Page size in bytes
     * @param int $date Date when the page has been edited in Unixtime
     * @param int $editor_id Last editor ID
     * @param string $editor_name Last editor name
     */
    public function __construct(
        public int $id,
        public int $length,
        public int $date,
        public int $editor_id,
        public string $editor_name
    ) {}
}