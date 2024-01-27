<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesKeyboardButtonActionOpenLink\Type;

/**
 * Description of the action, that should be performed on button click
 */
readonly class MessagesKeyboardButtonActionOpenLink
{
    /**
     * @param string $label Label for button
     * @param string $link link for button
     * @param Type $type
     * @param string|null $payload Additional data sent along with message for developer convenience
     */
    public function __construct(
        public string $label,
        public string $link,
        public Type $type,
        public ?string $payload = NULL
    ) {}
}