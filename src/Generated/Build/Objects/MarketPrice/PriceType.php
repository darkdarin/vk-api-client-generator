<?php

namespace App\Api\Generated\Build\Objects\MarketPrice;

enum PriceType: int
{
    case Exact = 0;
    case Range = 2;
    case ByAgreement = 3;
}