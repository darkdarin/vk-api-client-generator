<?php

namespace App\Api\Generated\Build\Objects;

readonly class PollsAnswer
{
    /**
     * @param int $id Answer ID
     * @param float $rate Answer rate in percents
     * @param string $text Answer text
     * @param int $votes Votes number
     */
    public function __construct(public int $id, public float $rate, public string $text, public int $votes)
    {}
}