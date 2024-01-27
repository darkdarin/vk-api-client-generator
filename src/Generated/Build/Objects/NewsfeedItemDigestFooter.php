<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\NewsfeedItemDigestFooter\Style;

readonly class NewsfeedItemDigestFooter
{
    /**
     * @param Style $style
     * @param string $text text for invite to enable smart feed
     * @param mixed $button
     */
    public function __construct(public Style $style, public string $text, public mixed $button = NULL)
    {}
}