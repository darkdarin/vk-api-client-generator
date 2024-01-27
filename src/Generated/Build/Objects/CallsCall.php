<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallsCall
{
    /**
     * @param int $initiator_id Caller initiator
     * @param int $receiver_id Caller receiver
     * @param mixed $state
     * @param int $time Timestamp for call
     * @param int|null $duration Call duration
     * @param bool|null $video Was this call initiated as video call
     * @param mixed $participants
     */
    public function __construct(
        public int $initiator_id,
        public int $receiver_id,
        public mixed $state,
        public int $time,
        public ?int $duration = NULL,
        public ?bool $video = NULL,
        public mixed $participants = NULL
    ) {}
}