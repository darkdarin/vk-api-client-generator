<?php

namespace App\Api\Generated\Build\Objects;

readonly class WidgetsWidgetPage
{
    /**
     * @param mixed $comments
     * @param int|null $date Date when widgets on the page has been initialized firstly in Unixtime
     * @param string|null $description Page description
     * @param int|null $id Page ID
     * @param mixed $likes
     * @param string|null $page_id page_id parameter value
     * @param string|null $photo URL of the preview image
     * @param string|null $title Page title
     * @param string|null $url Page absolute URL
     */
    public function __construct(
        public mixed $comments = NULL,
        public ?int $date = NULL,
        public ?string $description = NULL,
        public ?int $id = NULL,
        public mixed $likes = NULL,
        public ?string $page_id = NULL,
        public ?string $photo = NULL,
        public ?string $title = NULL,
        public ?string $url = NULL
    ) {}
}