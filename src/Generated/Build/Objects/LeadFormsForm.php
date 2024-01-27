<?php

namespace App\Api\Generated\Build\Objects;

readonly class LeadFormsForm
{
    /**
     * @param int $form_id
     * @param int $group_id
     * @param int $leads_count
     * @param string $url
     * @param string|null $photo
     * @param string|null $name
     * @param string|null $title
     * @param string|null $description
     * @param string|null $confirmation
     * @param string|null $site_link_url
     * @param string|null $policy_link_url
     * @param array|null $questions
     * @param mixed $active
     * @param string|null $pixel_code
     * @param int|null $once_per_user
     * @param string|null $notify_admins
     * @param string|null $notify_emails
     */
    public function __construct(
        public int $form_id,
        public int $group_id,
        public int $leads_count,
        public string $url,
        public ?string $photo = NULL,
        public ?string $name = NULL,
        public ?string $title = NULL,
        public ?string $description = NULL,
        public ?string $confirmation = NULL,
        public ?string $site_link_url = NULL,
        public ?string $policy_link_url = NULL,
        public ?array $questions = NULL,
        public mixed $active = NULL,
        public ?string $pixel_code = NULL,
        public ?int $once_per_user = NULL,
        public ?string $notify_admins = NULL,
        public ?string $notify_emails = NULL
    ) {}
}