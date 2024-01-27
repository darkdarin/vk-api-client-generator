<?php

namespace App\Api\Generated\Build\Objects\NotificationsSendMessageError;

enum Code: int
{
    case NotificationsDisabled = 1;
    case FloodControlPerHour = 2;
    case FloodControlPerDay = 3;
    case AppIsNotInstalled = 4;
}