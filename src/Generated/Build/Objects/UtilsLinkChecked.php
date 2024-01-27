<?php

namespace App\Api\Generated\Build\Objects;

readonly class UtilsLinkChecked
{
    /**
     * @param string|null $link Link URL
     * @param mixed $status
     */
    public function __construct(public ?string $link = NULL, public mixed $status = NULL)
    {}
}