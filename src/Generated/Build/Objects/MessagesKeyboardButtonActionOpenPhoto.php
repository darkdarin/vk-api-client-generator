<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesKeyboardButtonActionOpenPhoto\Type;

/**
 * Description of the action, that should be performed on button click
 */
readonly class MessagesKeyboardButtonActionOpenPhoto
{
    /**
     * @param Type $type
     */
    public function __construct(public Type $type)
    {}
}