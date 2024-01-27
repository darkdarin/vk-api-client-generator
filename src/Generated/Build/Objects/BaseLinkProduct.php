<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\BaseLinkProduct\Type;

readonly class BaseLinkProduct
{
    /**
     * @param mixed $price
     * @param string|null $merchant
     * @param mixed $category
     * @param mixed $geo
     * @param int|null $distance
     * @param string|null $city
     * @param mixed $status
     * @param int|null $orders_count
     * @param Type|null $type
     */
    public function __construct(
        public mixed $price,
        public ?string $merchant = NULL,
        public mixed $category = NULL,
        public mixed $geo = NULL,
        public ?int $distance = NULL,
        public ?string $city = NULL,
        public mixed $status = NULL,
        public ?int $orders_count = NULL,
        public ?Type $type = NULL
    ) {}
}