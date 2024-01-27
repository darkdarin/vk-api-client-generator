<?php

namespace App\Api\Generated\Build\Objects;

enum CallsEndState: string
{
    case CanceledByInitiator = 'canceled_by_initiator';
    case CanceledByReceiver = 'canceled_by_receiver';
    case Reached = 'reached';
}