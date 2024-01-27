<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\GroupsSettingsTwitter\Status;

readonly class GroupsSettingsTwitter
{
    /**
     * @param Status $status
     * @param string|null $name
     */
    public function __construct(public Status $status, public ?string $name = NULL)
    {}
}