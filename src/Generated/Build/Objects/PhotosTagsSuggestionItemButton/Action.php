<?php

namespace App\Api\Generated\Build\Objects\PhotosTagsSuggestionItemButton;

enum Action: string
{
    case Confirm = 'confirm';
    case Decline = 'decline';
    case ShowTags = 'show_tags';
}