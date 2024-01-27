<?php

namespace App\Api\Generated\Build\Objects;

readonly class GroupsTokenPermissionSetting
{
    /**
     * @param string $name
     * @param int $setting
     */
    public function __construct(public string $name, public int $setting)
    {}
}