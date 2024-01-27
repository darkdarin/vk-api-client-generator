<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\AppsScope\Name;

/**
 * Scope description
 */
readonly class AppsScope
{
    /**
     * @param Name $name Scope name
     * @param string|null $title Scope title
     */
    public function __construct(public Name $name, public ?string $title = NULL)
    {}
}