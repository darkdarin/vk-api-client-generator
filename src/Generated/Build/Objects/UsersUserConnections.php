<?php

namespace App\Api\Generated\Build\Objects;

readonly class UsersUserConnections
{
    /**
     * @param string $skype User's Skype nickname
     * @param string $facebook User's Facebook account
     * @param string $twitter User's Twitter account
     * @param string $instagram User's Instagram account
     * @param string|null $facebook_name User's Facebook name
     * @param string|null $livejournal User's Livejournal account
     */
    public function __construct(
        public string $skype,
        public string $facebook,
        public string $twitter,
        public string $instagram,
        public ?string $facebook_name = NULL,
        public ?string $livejournal = NULL
    ) {}
}