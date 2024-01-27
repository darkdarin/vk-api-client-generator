<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\PollsBackground\Type;

readonly class PollsBackground
{
    /**
     * @param int|null $angle Gradient angle with 0 on positive X axis
     * @param string|null $color Hex color code without #
     * @param int|null $height Original height of pattern tile
     * @param int|null $id
     * @param string|null $name
     * @param array|null $images Pattern tiles
     * @param array|null $points Gradient points
     * @param Type|null $type
     * @param int|null $width Original with of pattern tile
     */
    public function __construct(
        public ?int $angle = NULL,
        public ?string $color = NULL,
        public ?int $height = NULL,
        public ?int $id = NULL,
        public ?string $name = NULL,
        public ?array $images = NULL,
        public ?array $points = NULL,
        public ?Type $type = NULL,
        public ?int $width = NULL
    ) {}
}