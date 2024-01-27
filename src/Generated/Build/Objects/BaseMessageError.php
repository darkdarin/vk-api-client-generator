<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseMessageError
{
    /**
     * @param int|null $code Error code
     * @param string|null $description Error message
     */
    public function __construct(public ?int $code = NULL, public ?string $description = NULL)
    {}
}