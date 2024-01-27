<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\AdsLookalikeRequest\SourceType;
use App\Api\Generated\Build\Objects\AdsLookalikeRequest\Status;

readonly class AdsLookalikeRequest
{
    /**
     * @param int $id Lookalike request ID
     * @param int $create_time Lookalike request create time, as Unixtime
     * @param int $update_time Lookalike request update time, as Unixtime
     * @param Status $status Lookalike request status
     * @param SourceType $source_type Lookalike request source type
     * @param int|null $scheduled_delete_time Time by which lookalike request would be deleted, as Unixtime
     * @param int|null $source_retargeting_group_id Retargeting group id, which was used as lookalike seed
     * @param string|null $source_name Lookalike request seed name (retargeting group name)
     * @param int|null $audience_count Lookalike request seed audience size
     * @param array|null $save_audience_levels
     */
    public function __construct(
        public int $id,
        public int $create_time,
        public int $update_time,
        public Status $status,
        public SourceType $source_type,
        public ?int $scheduled_delete_time = NULL,
        public ?int $source_retargeting_group_id = NULL,
        public ?string $source_name = NULL,
        public ?int $audience_count = NULL,
        public ?array $save_audience_levels = NULL
    ) {}
}