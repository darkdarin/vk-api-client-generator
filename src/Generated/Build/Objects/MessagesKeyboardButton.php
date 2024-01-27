<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesKeyboardButton\Color;

readonly class MessagesKeyboardButton
{
    /**
     * @param mixed $action
     * @param Color|null $color Button color
     */
    public function __construct(public mixed $action, public ?Color $color = NULL)
    {}
}