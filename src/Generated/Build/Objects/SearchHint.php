<?php

namespace App\Api\Generated\Build\Objects;

readonly class SearchHint
{
    /**
     * @param string $description Object description
     * @param mixed $type
     * @param mixed $app
     * @param mixed $global Information whether the object has been found globally
     * @param mixed $group
     * @param mixed $profile
     * @param mixed $section
     * @param mixed $link
     */
    public function __construct(
        public string $description,
        public mixed $type,
        public mixed $app = NULL,
        public mixed $global = NULL,
        public mixed $group = NULL,
        public mixed $profile = NULL,
        public mixed $section = NULL,
        public mixed $link = NULL
    ) {}
}