<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesKeyboardButtonActionLocation\Type;

/**
 * Description of the action, that should be performed on button click
 */
readonly class MessagesKeyboardButtonActionLocation
{
    /**
     * @param Type $type
     * @param string|null $payload Additional data sent along with message for developer convenience
     */
    public function __construct(public Type $type, public ?string $payload = NULL)
    {}
}