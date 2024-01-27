<?php

namespace App\Api\Generated\Build\Objects;

readonly class BaseUploadServer
{
    /**
     * @param string $upload_url Upload URL
     */
    public function __construct(public string $upload_url)
    {}
}