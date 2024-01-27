<?php

namespace App\Api\Generated\Build\Objects\OrdersOrder;

enum Status: string
{
    case Created = 'created';
    case Charged = 'charged';
    case Refunded = 'refunded';
    case Chargeable = 'chargeable';
    case Cancelled = 'cancelled';
    case Declined = 'declined';
}