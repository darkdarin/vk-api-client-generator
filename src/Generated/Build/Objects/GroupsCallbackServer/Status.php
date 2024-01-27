<?php

namespace App\Api\Generated\Build\Objects\GroupsCallbackServer;

enum Status: string
{
    case Unconfigured = 'unconfigured';
    case Failed = 'failed';
    case Wait = 'wait';
    case Ok = 'ok';
}