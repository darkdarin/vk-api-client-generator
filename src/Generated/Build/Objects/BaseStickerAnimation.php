<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\BaseStickerAnimation\Type;

readonly class BaseStickerAnimation
{
    /**
     * @param Type|null $type Type of animation script
     * @param string|null $url URL of animation script
     */
    public function __construct(public ?Type $type = NULL, public ?string $url = NULL)
    {}
}