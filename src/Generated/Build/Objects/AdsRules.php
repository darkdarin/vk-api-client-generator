<?php

namespace App\Api\Generated\Build\Objects;

readonly class AdsRules
{
    /**
     * @param mixed $help_url Help url
     * @param string|null $help_label Label
     * @param string|null $content_html Content Html
     * @param bool|null $help_chat Help chat
     */
    public function __construct(
        public mixed $help_url = NULL,
        public ?string $help_label = NULL,
        public ?string $content_html = NULL,
        public ?bool $help_chat = NULL
    ) {}
}