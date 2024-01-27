<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountPushParams
{
    /**
     * @param array|null $msg
     * @param array|null $chat
     * @param array|null $like
     * @param array|null $repost
     * @param array|null $comment
     * @param array|null $mention
     * @param array|null $reply
     * @param array|null $new_post
     * @param array|null $wall_post
     * @param array|null $wall_publish
     * @param array|null $friend
     * @param array|null $friend_found
     * @param array|null $friend_accepted
     * @param array|null $group_invite
     * @param array|null $group_accepted
     * @param array|null $birthday
     * @param array|null $event_soon
     * @param array|null $app_request
     * @param array|null $sdk_open
     */
    public function __construct(
        public ?array $msg = NULL,
        public ?array $chat = NULL,
        public ?array $like = NULL,
        public ?array $repost = NULL,
        public ?array $comment = NULL,
        public ?array $mention = NULL,
        public ?array $reply = NULL,
        public ?array $new_post = NULL,
        public ?array $wall_post = NULL,
        public ?array $wall_publish = NULL,
        public ?array $friend = NULL,
        public ?array $friend_found = NULL,
        public ?array $friend_accepted = NULL,
        public ?array $group_invite = NULL,
        public ?array $group_accepted = NULL,
        public ?array $birthday = NULL,
        public ?array $event_soon = NULL,
        public ?array $app_request = NULL,
        public ?array $sdk_open = NULL
    ) {}
}