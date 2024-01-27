<?php

namespace App\Api\Generated\Build\Objects;

readonly class WallAttachedNote
{
    /**
     * @param int $comments Comments number
     * @param int $date Date when the note has been created in Unixtime
     * @param int $id Note ID
     * @param int $owner_id Note owner's ID
     * @param int $read_comments Read comments number
     * @param string $title Note title
     * @param string $view_url URL of the page with note preview
     * @param string|null $text Note text
     * @param list<string>|null $privacy_view
     * @param list<string>|null $privacy_comment
     * @param int|null $can_comment
     * @param string|null $text_wiki Note wiki text
     */
    public function __construct(
        public int $comments,
        public int $date,
        public int $id,
        public int $owner_id,
        public int $read_comments,
        public string $title,
        public string $view_url,
        public ?string $text = NULL,
        public ?array $privacy_view = NULL,
        public ?array $privacy_comment = NULL,
        public ?int $can_comment = NULL,
        public ?string $text_wiki = NULL
    ) {}
}