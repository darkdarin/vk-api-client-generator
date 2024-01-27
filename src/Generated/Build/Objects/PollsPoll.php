<?php

namespace App\Api\Generated\Build\Objects;

readonly class PollsPoll
{
    /**
     * @param bool $multiple Information whether the poll with multiple choices
     * @param int $end_date
     * @param bool $closed
     * @param bool $is_board
     * @param bool $can_edit
     * @param bool $can_vote
     * @param bool $can_report
     * @param bool $can_share
     * @param array $answers
     * @param int $created Date when poll has been created in Unixtime
     * @param int $id Poll ID
     * @param int $owner_id Poll owner's ID
     * @param string $question Poll question
     * @param int $votes Votes number
     * @param bool $disable_unvote
     * @param mixed $anonymous
     * @param array|null $friends
     * @param int|null $answer_id Current user's answer ID
     * @param list<int>|null $answer_ids Current user's answer IDs
     * @param string|null $embed_hash
     * @param mixed $photo
     * @param int|null $author_id Poll author's ID
     * @param mixed $background
     */
    public function __construct(
        public bool $multiple,
        public int $end_date,
        public bool $closed,
        public bool $is_board,
        public bool $can_edit,
        public bool $can_vote,
        public bool $can_report,
        public bool $can_share,
        public array $answers,
        public int $created,
        public int $id,
        public int $owner_id,
        public string $question,
        public int $votes,
        public bool $disable_unvote,
        public mixed $anonymous = NULL,
        public ?array $friends = NULL,
        public ?int $answer_id = NULL,
        public ?array $answer_ids = NULL,
        public ?string $embed_hash = NULL,
        public mixed $photo = NULL,
        public ?int $author_id = NULL,
        public mixed $background = NULL
    ) {}
}