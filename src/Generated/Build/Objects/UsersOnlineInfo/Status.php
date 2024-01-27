<?php

namespace App\Api\Generated\Build\Objects\UsersOnlineInfo;

enum Status: string
{
    case Recently = 'recently';
    case LastWeek = 'last_week';
    case LastMonth = 'last_month';
    case LongAgo = 'long_ago';
    case NotShow = 'not_show';
}