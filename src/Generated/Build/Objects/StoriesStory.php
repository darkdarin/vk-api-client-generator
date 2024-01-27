<?php

namespace App\Api\Generated\Build\Objects;

readonly class StoriesStory
{
    /**
     * @param int $id Story ID.
     * @param int $owner_id Story owner's ID.
     * @param string|null $access_key Access key for private object.
     * @param mixed $can_comment Information whether current user can comment the story (0 - no, 1 - yes).
     * @param mixed $can_reply Information whether current user can reply to the story (0 - no, 1 - yes).
     * @param mixed $can_see Information whether current user can see the story (0 - no, 1 - yes).
     * @param bool|null $can_like Information whether current user can like the story.
     * @param mixed $can_share Information whether current user can share the story (0 - no, 1 - yes).
     * @param mixed $can_hide Information whether current user can hide the story (0 - no, 1 - yes).
     * @param int|null $date Date when story has been added in Unixtime.
     * @param int|null $expires_at Story expiration time. Unixtime.
     * @param bool|null $is_deleted Information whether the story is deleted (false - no, true - yes).
     * @param bool|null $is_expired Information whether the story is expired (false - no, true - yes).
     * @param mixed $link
     * @param mixed $parent_story
     * @param string|null $parent_story_access_key Access key for private object.
     * @param int|null $parent_story_id Parent story ID.
     * @param int|null $parent_story_owner_id Parent story owner's ID.
     * @param mixed $photo
     * @param mixed $replies Replies counters to current story.
     * @param mixed $seen Information whether current user has seen the story or not (0 - no, 1 - yes).
     * @param mixed $type
     * @param mixed $clickable_stickers
     * @param mixed $video
     * @param int|null $views Views number.
     * @param mixed $can_ask Information whether story has question sticker and current user can send question to the author
     * @param mixed $can_ask_anonymous Information whether story has question sticker and current user can send anonymous question to the author
     * @param int|null $narratives_count
     * @param string|null $first_narrative_title
     * @param bool|null $can_use_in_narrative
     */
    public function __construct(
        public int $id,
        public int $owner_id,
        public ?string $access_key = NULL,
        public mixed $can_comment = NULL,
        public mixed $can_reply = NULL,
        public mixed $can_see = NULL,
        public ?bool $can_like = NULL,
        public mixed $can_share = NULL,
        public mixed $can_hide = NULL,
        public ?int $date = NULL,
        public ?int $expires_at = NULL,
        public ?bool $is_deleted = NULL,
        public ?bool $is_expired = NULL,
        public mixed $link = NULL,
        public mixed $parent_story = NULL,
        public ?string $parent_story_access_key = NULL,
        public ?int $parent_story_id = NULL,
        public ?int $parent_story_owner_id = NULL,
        public mixed $photo = NULL,
        public mixed $replies = NULL,
        public mixed $seen = NULL,
        public mixed $type = NULL,
        public mixed $clickable_stickers = NULL,
        public mixed $video = NULL,
        public ?int $views = NULL,
        public mixed $can_ask = NULL,
        public mixed $can_ask_anonymous = NULL,
        public ?int $narratives_count = NULL,
        public ?string $first_narrative_title = NULL,
        public ?bool $can_use_in_narrative = NULL
    ) {}
}