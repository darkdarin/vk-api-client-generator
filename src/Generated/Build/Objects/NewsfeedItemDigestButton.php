<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\NewsfeedItemDigestButton\Style;

readonly class NewsfeedItemDigestButton
{
    /**
     * @param string $title
     * @param Style|null $style
     */
    public function __construct(public string $title, public ?Style $style = NULL)
    {}
}