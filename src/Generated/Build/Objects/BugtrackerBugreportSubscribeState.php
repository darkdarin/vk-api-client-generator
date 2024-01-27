<?php

namespace App\Api\Generated\Build\Objects;

readonly class BugtrackerBugreportSubscribeState
{
    /**
     * @param bool $can_set_subscribe
     * @param bool|null $is_subscribed
     * @param string|null $set_subscribe_hash
     */
    public function __construct(
        public bool $can_set_subscribe,
        public ?bool $is_subscribed = NULL,
        public ?string $set_subscribe_hash = NULL
    ) {}
}