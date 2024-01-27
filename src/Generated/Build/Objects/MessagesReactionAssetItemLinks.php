<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesReactionAssetItemLinks
{
    /**
     * @param string $big_animation Big reaction animation json file
     * @param string $small_animation Small reaction animation json file
     * @param string $static Reaction image file
     */
    public function __construct(
        public string $big_animation,
        public string $small_animation,
        public string $static
    ) {}
}