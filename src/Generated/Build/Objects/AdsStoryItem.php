<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsStoryItem
{
    /**
     * @param int|null $id Story id
     * @param int|null $owner_id Owner id
     * @param string|null $raw_id Story raw id
     * @param string|null $date Date
     * @param int|null $time Time
     * @param string|null $type Type
     * @param bool|null $unread Is unread
     * @param bool|null $canLike Can like
     * @param bool|null $can_comment Can comment
     * @param bool|null $can_share Can share
     * @param bool|null $can_remove Can remove
     * @param bool|null $can_manage Can manage
     * @param bool|null $can_ask Can ask
     * @param bool|null $can_ask_anonymous Can ask anonymous
     * @param bool|null $isProfileQuestion Is profile question
     * @param mixed $stats
     * @param mixed $link
     * @param string|null $photo_url Photo url
     * @param string|null $preview_url Preview url
     * @param string|null $track_code Track code
     * @param bool|null $isPartOfNarrative Is part of narrative
     * @param bool|null $isAds Is ads
     * @param string|null $video_url Video url
     * @param string|null $first_frame First frame
     * @param string|null $small_preview Small preview
     * @param bool|null $isLiked Is liked
     */
    public function __construct(
        public ?int $id = NULL,
        public ?int $owner_id = NULL,
        public ?string $raw_id = NULL,
        public ?string $date = NULL,
        public ?int $time = NULL,
        public ?string $type = NULL,
        public ?bool $unread = NULL,
        public ?bool $canLike = NULL,
        public ?bool $can_comment = NULL,
        public ?bool $can_share = NULL,
        public ?bool $can_remove = NULL,
        public ?bool $can_manage = NULL,
        public ?bool $can_ask = NULL,
        public ?bool $can_ask_anonymous = NULL,
        public ?bool $isProfileQuestion = NULL,
        public mixed $stats = NULL,
        public mixed $link = NULL,
        public ?string $photo_url = NULL,
        public ?string $preview_url = NULL,
        public ?string $track_code = NULL,
        public ?bool $isPartOfNarrative = NULL,
        public ?bool $isAds = NULL,
        public ?string $video_url = NULL,
        public ?string $first_frame = NULL,
        public ?string $small_preview = NULL,
        public ?bool $isLiked = NULL
    ) {}
}