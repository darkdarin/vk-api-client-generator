<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatPreview
{
    /**
     * @param int|null $admin_id
     * @param bool|null $joined
     * @param int|null $local_id
     * @param list<int>|null $members
     * @param int|null $members_count
     * @param string|null $title
     * @param bool|null $is_member
     * @param mixed $photo
     * @param bool|null $is_don
     * @param bool|null $is_nft
     * @param bool|null $is_group_channel
     * @param mixed $button
     */
    public function __construct(
        public ?int $admin_id = NULL,
        public ?bool $joined = NULL,
        public ?int $local_id = NULL,
        public ?array $members = NULL,
        public ?int $members_count = NULL,
        public ?string $title = NULL,
        public ?bool $is_member = NULL,
        public mixed $photo = NULL,
        public ?bool $is_don = NULL,
        public ?bool $is_nft = NULL,
        public ?bool $is_group_channel = NULL,
        public mixed $button = NULL
    ) {}
}