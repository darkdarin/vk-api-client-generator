<?php

namespace App\Api\Generated\Build\Objects\LeadFormsQuestionItem;

enum Type: string
{
    case Input = 'input';
    case Textarea = 'textarea';
    case Radio = 'radio';
    case Checkbox = 'checkbox';
    case Select = 'select';
}