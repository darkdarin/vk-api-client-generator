<?php

namespace App\Api\Generated\Build\Objects;

/**
 * Owner
 */
readonly class AdsPostOwner
{
    /**
     * @param int|null $id Owner id
     * @param string|null $name Name
     * @param string|null $photo Photo url
     * @param string|null $url Profile url
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?string $photo = NULL,
        public ?string $url = NULL
    ) {}
}