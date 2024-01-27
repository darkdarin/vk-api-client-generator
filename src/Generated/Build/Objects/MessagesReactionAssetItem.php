<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesReactionAssetItem
{
    /**
     * @param int $reaction_id
     * @param mixed $links Liks to reactions assets for each asset type
     */
    public function __construct(public int $reaction_id, public mixed $links)
    {}
}