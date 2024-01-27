<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountNameRequest
{
    /**
     * @param string|null $first_name First name in request
     * @param int|null $id Request ID needed to cancel the request
     * @param string|null $last_name Last name in request
     * @param mixed $status
     * @param string|null $lang Text to display to user
     * @param string|null $link_href href for link in lang field
     * @param string|null $link_label label to display for link in lang field
     */
    public function __construct(
        public ?string $first_name = NULL,
        public ?int $id = NULL,
        public ?string $last_name = NULL,
        public mixed $status = NULL,
        public ?string $lang = NULL,
        public ?string $link_href = NULL,
        public ?string $link_label = NULL
    ) {}
}