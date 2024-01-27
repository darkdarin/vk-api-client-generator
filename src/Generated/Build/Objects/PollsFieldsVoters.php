<?php

namespace App\Api\Generated\Build\Objects;

readonly class PollsFieldsVoters
{
    /**
     * @param int|null $answer_id Answer ID
     * @param mixed $users
     * @param string|null $answer_offset Answer offset
     */
    public function __construct(
        public ?int $answer_id = NULL,
        public mixed $users = NULL,
        public ?string $answer_offset = NULL
    ) {}
}