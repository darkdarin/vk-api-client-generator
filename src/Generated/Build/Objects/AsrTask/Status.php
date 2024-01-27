<?php

namespace App\Api\Generated\Build\Objects\AsrTask;

enum Status: string
{
    case Processing = 'processing';
    case Finished = 'finished';
    case InternalError = 'internal_error';
    case TranscodingError = 'transcoding_error';
    case RecognitionError = 'recognition_error';
}