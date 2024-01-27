<?php

namespace App\Api\Generated\Build\Objects;

readonly class MessagesPushSettings
{
    /**
     * @param bool $disabled_forever Information whether push notifications are disabled forever
     * @param bool $no_sound Information whether the sound is on
     * @param int|null $disabled_until Time until what notifications are disabled
     * @param bool|null $disabled_mentions Information whether the mentions are disabled
     * @param bool|null $disabled_mass_mentions Information whether the mass mentions (like '@all', '@online') are disabled
     */
    public function __construct(
        public bool $disabled_forever,
        public bool $no_sound,
        public ?int $disabled_until = NULL,
        public ?bool $disabled_mentions = NULL,
        public ?bool $disabled_mass_mentions = NULL
    ) {}
}