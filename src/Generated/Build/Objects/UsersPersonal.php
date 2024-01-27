<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersPersonal
{
    /**
     * @param int|null $alcohol User's views on alcohol
     * @param string|null $inspired_by User's inspired by
     * @param list<string>|null $langs
     * @param array|null $langs_full User's languages with full info
     * @param int|null $life_main User's personal priority in life
     * @param int|null $people_main User's personal priority in people
     * @param int|null $political User's political views
     * @param string|null $religion User's religion
     * @param int|null $religion_id User's religion id
     * @param int|null $smoking User's views on smoking
     */
    public function __construct(
        public ?int $alcohol = NULL,
        public ?string $inspired_by = NULL,
        public ?array $langs = NULL,
        public ?array $langs_full = NULL,
        public ?int $life_main = NULL,
        public ?int $people_main = NULL,
        public ?int $political = NULL,
        public ?string $religion = NULL,
        public ?int $religion_id = NULL,
        public ?int $smoking = NULL
    ) {}
}