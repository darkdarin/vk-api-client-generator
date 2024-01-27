<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsStoriesOwner
{
    /**
     * @param int|null $id Owner id
     * @param string|null $href Href
     * @param string|null $name Name
     * @param string|null $photo Photo
     * @param string|null $verify Verify
     * @param string|null $gender Gender
     * @param string|null $name_get Name get
     * @param string|null $firstName First name
     * @param string|null $first_name_gen First name gen
     * @param string|null $first_name_ins First name ins
     * @param bool|null $can_follow Can follow
     */
    public function __construct(
        public ?int $id = NULL,
        public ?string $href = NULL,
        public ?string $name = NULL,
        public ?string $photo = NULL,
        public ?string $verify = NULL,
        public ?string $gender = NULL,
        public ?string $name_get = NULL,
        public ?string $firstName = NULL,
        public ?string $first_name_gen = NULL,
        public ?string $first_name_ins = NULL,
        public ?bool $can_follow = NULL
    ) {}
}