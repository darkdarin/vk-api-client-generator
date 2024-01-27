<?php

namespace App\Api\Generated\Build\Objects\AdsLookalikeRequest;

enum Status: string
{
    case SearchInProgress = 'search_in_progress';
    case SearchFailed = 'search_failed';
    case SearchDone = 'search_done';
    case SaveInProgress = 'save_in_progress';
    case SaveFailed = 'save_failed';
    case SaveDone = 'save_done';
}