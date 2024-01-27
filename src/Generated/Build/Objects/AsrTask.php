<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\AsrTask\Status;

readonly class AsrTask
{
    /**
     * @param string $id Task ID in UUID format.
     * @param Status $status Status of the task.
     * @param string $text Recognised text, if task is `finished`.
     */
    public function __construct(public string $id, public Status $status, public string $text)
    {}
}