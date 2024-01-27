<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesKeyboardButtonActionVkpay\Type;

/**
 * Description of the action, that should be performed on button click
 */
readonly class MessagesKeyboardButtonActionVkpay
{
    /**
     * @param string $hash Fragment value in app link like vk.com/app123456_-654321#{hash}
     * @param Type $type
     * @param string|null $payload Additional data sent along with message for developer convenience
     */
    public function __construct(public string $hash, public Type $type, public ?string $payload = NULL)
    {}
}