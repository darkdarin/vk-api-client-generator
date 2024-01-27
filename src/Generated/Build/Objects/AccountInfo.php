<?php

namespace App\Api\Generated\Build\Objects;

use Symfony\Component\Serializer\Attribute\SerializedName;

readonly class AccountInfo
{
    /**
     * @param mixed $_fa_required Two factor authentication is enabled
     * @param string|null $country Country code
     * @param mixed $https_required Information whether HTTPS-only is enabled
     * @param mixed $intro Information whether user has been processed intro
     * @param int|null $lang Language ID
     * @param mixed $no_wall_replies Information whether wall comments should be hidden
     * @param mixed $own_posts_default Information whether only owners posts should be shown
     */
    public function __construct(
        #[SerializedName('2fa_required')]
        public mixed $_fa_required = NULL,
        public ?string $country = NULL,
        public mixed $https_required = NULL,
        public mixed $intro = NULL,
        public ?int $lang = NULL,
        public mixed $no_wall_replies = NULL,
        public mixed $own_posts_default = NULL
    ) {}
}