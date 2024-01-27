<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\UsersOnlineInfo\Status;

readonly class UsersOnlineInfo
{
    /**
     * @param bool $visible Whether you can see real online status of user or not
     * @param int|null $last_seen Last time we saw user being active
     * @param bool|null $is_online Whether user is currently online or not
     * @param int|null $app_id Application id from which user is currently online or was last seen online
     * @param bool|null $is_mobile Is user online from desktop app or mobile app
     * @param Status|null $status In case user online is not visible, it indicates approximate timeframe of user online
     */
    public function __construct(
        public bool $visible,
        public ?int $last_seen = NULL,
        public ?bool $is_online = NULL,
        public ?int $app_id = NULL,
        public ?bool $is_mobile = NULL,
        public ?Status $status = NULL
    ) {}
}