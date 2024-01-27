<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\BugtrackerAttachment\Type;

readonly class BugtrackerAttachment
{
    /**
     * @param Type $type
     * @param mixed $doc
     * @param mixed $photo
     */
    public function __construct(public Type $type, public mixed $doc = NULL, public mixed $photo = NULL)
    {}
}