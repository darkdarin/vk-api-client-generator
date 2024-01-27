<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesChatFull
{
    /**
     * @param int $admin_id Chat creator ID
     * @param int $id Chat ID
     * @param string $type Chat type
     * @param array $users
     * @param int $members_count Count members in a chat
     * @param mixed $kicked Shows that user has been kicked from the chat
     * @param mixed $left Shows that user has been left the chat
     * @param string|null $photo_100 URL of the preview image with 100 px in width
     * @param string|null $photo_200 URL of the preview image with 200 px in width
     * @param string|null $photo_50 URL of the preview image with 50 px in width
     * @param mixed $push_settings
     * @param string|null $title Chat title
     * @param bool|null $is_default_photo If provided photo is default
     * @param bool|null $is_group_channel If chat is group channel
     */
    public function __construct(
        public int $admin_id,
        public int $id,
        public string $type,
        public array $users,
        public int $members_count,
        public mixed $kicked = NULL,
        public mixed $left = NULL,
        public ?string $photo_100 = NULL,
        public ?string $photo_200 = NULL,
        public ?string $photo_50 = NULL,
        public mixed $push_settings = NULL,
        public ?string $title = NULL,
        public ?bool $is_default_photo = NULL,
        public ?bool $is_group_channel = NULL
    ) {}
}