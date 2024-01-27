<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoreStickersKeyword
{
    /**
     * @param list<string> $words
     * @param mixed $user_stickers
     * @param mixed $promoted_stickers
     * @param array|null $stickers
     */
    public function __construct(
        public array $words,
        public mixed $user_stickers = NULL,
        public mixed $promoted_stickers = NULL,
        public ?array $stickers = NULL
    ) {}
}