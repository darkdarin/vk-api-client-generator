<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatSettings
{
    /**
     * @param int $owner_id
     * @param string $title Chat title
     * @param mixed $state
     * @param mixed $acl
     * @param int|null $members_count
     * @param int|null $friends_count
     * @param mixed $pinned_message
     * @param mixed $photo
     * @param list<int>|null $admin_ids Ids of chat admins
     * @param list<int>|null $active_ids
     * @param bool|null $is_group_channel
     * @param mixed $permissions
     * @param bool|null $is_disappearing
     * @param string|null $theme
     * @param string|null $disappearing_chat_link
     * @param bool|null $is_service
     */
    public function __construct(
        public int $owner_id,
        public string $title,
        public mixed $state,
        public mixed $acl,
        public ?int $members_count = NULL,
        public ?int $friends_count = NULL,
        public mixed $pinned_message = NULL,
        public mixed $photo = NULL,
        public ?array $admin_ids = NULL,
        public ?array $active_ids = NULL,
        public ?bool $is_group_channel = NULL,
        public mixed $permissions = NULL,
        public ?bool $is_disappearing = NULL,
        public ?string $theme = NULL,
        public ?string $disappearing_chat_link = NULL,
        public ?bool $is_service = NULL
    ) {}
}