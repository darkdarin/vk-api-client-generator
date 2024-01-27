<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\MessagesKeyboardButtonActionOpenApp\Type;

/**
 * Description of the action, that should be performed on button click
 */
readonly class MessagesKeyboardButtonActionOpenApp
{
    /**
     * @param int $app_id Fragment value in app link like vk.com/app{app_id}_-654321#hash
     * @param string $label Label for button
     * @param int $owner_id Fragment value in app link like vk.com/app123456_{owner_id}#hash
     * @param Type $type
     * @param string|null $hash Fragment value in app link like vk.com/app123456_-654321#{hash}
     * @param string|null $payload Additional data sent along with message for developer convenience
     */
    public function __construct(
        public int $app_id,
        public string $label,
        public int $owner_id,
        public Type $type,
        public ?string $hash = NULL,
        public ?string $payload = NULL
    ) {}
}