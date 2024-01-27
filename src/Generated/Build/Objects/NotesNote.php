<?php

namespace App\Api\Generated\Build\Objects;

readonly class NotesNote
{
    /**
     * @param int $comments Comments number
     * @param int $date Date when the note has been created in Unixtime
     * @param int $id Note ID
     * @param int $owner_id Note owner's ID
     * @param string $title Note title
     * @param string $view_url URL of the page with note preview
     * @param int|null $read_comments
     * @param mixed $can_comment Information whether current user can comment the note
     * @param string|null $text Note text
     * @param string|null $text_wiki Note text in wiki format
     * @param list<string>|null $privacy_view
     * @param list<string>|null $privacy_comment
     */
    public function __construct(
        public int $comments,
        public int $date,
        public int $id,
        public int $owner_id,
        public string $title,
        public string $view_url,
        public ?int $read_comments = NULL,
        public mixed $can_comment = NULL,
        public ?string $text = NULL,
        public ?string $text_wiki = NULL,
        public ?array $privacy_view = NULL,
        public ?array $privacy_comment = NULL
    ) {}
}