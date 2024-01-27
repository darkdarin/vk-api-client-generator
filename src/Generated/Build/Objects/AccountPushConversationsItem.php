<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountPushConversationsItem
{
    /**
     * @param int $disabled_until Time until that notifications are disabled in seconds
     * @param int $peer_id Peer ID
     * @param mixed $sound Information whether the sound are enabled
     * @param mixed $disabled_mentions Information whether the mentions are disabled
     * @param mixed $disabled_mass_mentions Information whether the mass mentions (like '@all', '@online') are disabled. Can be affected by 'disabled_mentions'
     */
    public function __construct(
        public int $disabled_until,
        public int $peer_id,
        public mixed $sound,
        public mixed $disabled_mentions = NULL,
        public mixed $disabled_mass_mentions = NULL
    ) {}
}