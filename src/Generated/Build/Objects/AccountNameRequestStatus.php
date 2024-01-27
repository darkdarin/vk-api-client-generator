<?php

namespace App\Api\Generated\Build\Objects;

enum AccountNameRequestStatus: string
{
    case Success = 'success';
    case Processing = 'processing';
    case Declined = 'declined';
    case WasAccepted = 'was_accepted';
    case WasDeclined = 'was_declined';
    case DeclinedWithLink = 'declined_with_link';
    case Response = 'response';
    case ResponseWithLink = 'response_with_link';
}