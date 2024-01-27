<?php

namespace App\Api\Generated\Build\Objects;

readonly class ClientInfoForBots
{
    /**
     * @param array|null $button_actions
     * @param bool|null $keyboard client has support keyboard
     * @param bool|null $inline_keyboard client has support inline keyboard
     * @param bool|null $carousel client has support carousel
     * @param int|null $lang_id client or user language id
     */
    public function __construct(
        public ?array $button_actions = NULL,
        public ?bool $keyboard = NULL,
        public ?bool $inline_keyboard = NULL,
        public ?bool $carousel = NULL,
        public ?int $lang_id = NULL
    ) {}
}