<?php

namespace App\Api\Generated\Build\Objects;

readonly class StatusStatus
{
    /**
     * @param string $text Status text
     * @param mixed $audio
     */
    public function __construct(public string $text, public mixed $audio = NULL)
    {}
}