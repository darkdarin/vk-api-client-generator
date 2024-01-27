<?php

namespace App\Api\Generated\Build\Objects;

readonly class NotesNoteComment
{
    /**
     * @param int $date Date when the comment has beed added in Unixtime
     * @param int $id Comment ID
     * @param string $message Comment text
     * @param int $nid Note ID
     * @param int $oid Note ID
     * @param int $uid Comment author's ID
     * @param int|null $reply_to ID of replied comment 
     */
    public function __construct(
        public int $date,
        public int $id,
        public string $message,
        public int $nid,
        public int $oid,
        public int $uid,
        public ?int $reply_to = NULL
    ) {}
}