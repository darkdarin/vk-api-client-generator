<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\NotificationsSendMessageError\Code;

readonly class NotificationsSendMessageError
{
    /**
     * @param Code|null $code Error code
     * @param string|null $description Error description
     */
    public function __construct(public ?Code $code = NULL, public ?string $description = NULL)
    {}
}