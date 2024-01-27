<?php

namespace App\Api\Generated\Build\Objects;

readonly class CallbackMessageObject
{
    /**
     * @param mixed $client_info
     * @param mixed $message
     */
    public function __construct(public mixed $client_info = NULL, public mixed $message = NULL)
    {}
}