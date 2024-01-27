<?php

namespace App\Api\Generated\Build\Objects;

readonly class SecureGiveEventStickerItem
{
    /**
     * @param int|null $user_id
     * @param string|null $status
     */
    public function __construct(public ?int $user_id = NULL, public ?string $status = NULL)
    {}
}