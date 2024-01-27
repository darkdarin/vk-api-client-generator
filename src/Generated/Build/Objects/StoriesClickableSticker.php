<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\StoriesClickableSticker\Style;
use App\Api\Generated\Build\Objects\StoriesClickableSticker\Subtype;
use App\Api\Generated\Build\Objects\StoriesClickableSticker\Type;

readonly class StoriesClickableSticker
{
    /**
     * @param array $clickable_area
     * @param int $id Clickable sticker ID
     * @param Type $type
     * @param string|null $hashtag
     * @param mixed $link_object
     * @param string|null $mention
     * @param string|null $tooltip_text
     * @param int|null $owner_id
     * @param int|null $story_id
     * @param int|null $clip_id
     * @param string|null $question
     * @param string|null $question_button
     * @param int|null $place_id
     * @param mixed $market_item
     * @param mixed $audio
     * @param int|null $audio_start_time
     * @param Style|null $style
     * @param Subtype|null $subtype
     * @param int|null $post_owner_id
     * @param int|null $post_id
     * @param mixed $poll
     * @param string|null $color Color, hex format
     * @param int|null $sticker_id Sticker ID
     * @param int|null $sticker_pack_id Sticker pack ID
     * @param mixed $app
     * @param string|null $app_context Additional context for app sticker
     * @param bool|null $has_new_interactions Whether current user has unread interaction with this app
     * @param bool|null $is_broadcast_notify_allowed Whether current user allowed broadcast notify from this app
     * @param int|null $situational_theme_id
     * @param string|null $situational_app_url
     */
    public function __construct(
        public array $clickable_area,
        public int $id,
        public Type $type,
        public ?string $hashtag = NULL,
        public mixed $link_object = NULL,
        public ?string $mention = NULL,
        public ?string $tooltip_text = NULL,
        public ?int $owner_id = NULL,
        public ?int $story_id = NULL,
        public ?int $clip_id = NULL,
        public ?string $question = NULL,
        public ?string $question_button = NULL,
        public ?int $place_id = NULL,
        public mixed $market_item = NULL,
        public mixed $audio = NULL,
        public ?int $audio_start_time = NULL,
        public ?Style $style = NULL,
        public ?Subtype $subtype = NULL,
        public ?int $post_owner_id = NULL,
        public ?int $post_id = NULL,
        public mixed $poll = NULL,
        public ?string $color = NULL,
        public ?int $sticker_id = NULL,
        public ?int $sticker_pack_id = NULL,
        public mixed $app = NULL,
        public ?string $app_context = NULL,
        public ?bool $has_new_interactions = NULL,
        public ?bool $is_broadcast_notify_allowed = NULL,
        public ?int $situational_theme_id = NULL,
        public ?string $situational_app_url = NULL
    ) {}
}