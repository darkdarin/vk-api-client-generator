<?php

namespace App\Api\Generated\Build\Objects;

readonly class NewsfeedItemWallpostFeedback
{
    /**
     * @param mixed $type
     * @param string $question
     * @param array|null $answers
     * @param int|null $stars_count
     * @param list<string>|null $descriptions
     * @param string|null $gratitude
     * @param string|null $track_code
     */
    public function __construct(
        public mixed $type,
        public string $question,
        public ?array $answers = NULL,
        public ?int $stars_count = NULL,
        public ?array $descriptions = NULL,
        public ?string $gratitude = NULL,
        public ?string $track_code = NULL
    ) {}
}