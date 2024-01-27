<?php

namespace App\Api\Generated\Build\Objects;

readonly class BoardTopic
{
    /**
     * @param int|null $comments Comments number
     * @param int|null $created Date when the topic has been created in Unixtime
     * @param int|null $created_by Creator ID
     * @param int|null $id Topic ID
     * @param mixed $is_closed Information whether the topic is closed
     * @param mixed $is_fixed Information whether the topic is fixed
     * @param string|null $title Topic title
     * @param int|null $updated Date when the topic has been updated in Unixtime
     * @param int|null $updated_by ID of user who updated the topic
     * @param string|null $first_comment First comment text
     * @param string|null $last_comment Last comment text
     */
    public function __construct(
        public ?int $comments = NULL,
        public ?int $created = NULL,
        public ?int $created_by = NULL,
        public ?int $id = NULL,
        public mixed $is_closed = NULL,
        public mixed $is_fixed = NULL,
        public ?string $title = NULL,
        public ?int $updated = NULL,
        public ?int $updated_by = NULL,
        public ?string $first_comment = NULL,
        public ?string $last_comment = NULL
    ) {}
}