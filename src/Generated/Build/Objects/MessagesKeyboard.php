<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesKeyboard
{
    /**
     * @param bool $one_time Should this keyboard disappear on first use
     * @param list<array> $buttons
     * @param int|null $author_id Community or bot, which set this keyboard
     * @param bool|null $inline
     */
    public function __construct(
        public bool $one_time,
        public array $buttons,
        public ?int $author_id = NULL,
        public ?bool $inline = NULL
    ) {}
}