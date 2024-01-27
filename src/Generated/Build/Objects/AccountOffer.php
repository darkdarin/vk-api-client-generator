<?php

namespace App\Api\Generated\Build\Objects;

use App\Api\Generated\Build\Objects\AccountOffer\LinkType;

readonly class AccountOffer
{
    /**
     * @param string|null $description Offer description
     * @param int|null $id Offer ID
     * @param string|null $img URL of the preview image
     * @param string|null $instruction Instruction how to process the offer
     * @param string|null $instruction_html Instruction how to process the offer (HTML format)
     * @param int|null $price Offer price
     * @param string|null $short_description Offer short description
     * @param string|null $tag Offer tag
     * @param string|null $title Offer title
     * @param float|null $currency_amount Currency amount
     * @param int|null $link_id Link id
     * @param LinkType|null $link_type Link type
     */
    public function __construct(
        public ?string $description = NULL,
        public ?int $id = NULL,
        public ?string $img = NULL,
        public ?string $instruction = NULL,
        public ?string $instruction_html = NULL,
        public ?int $price = NULL,
        public ?string $short_description = NULL,
        public ?string $tag = NULL,
        public ?string $title = NULL,
        public ?float $currency_amount = NULL,
        public ?int $link_id = NULL,
        public ?LinkType $link_type = NULL
    ) {}
}