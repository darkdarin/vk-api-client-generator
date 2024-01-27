<?php

namespace App\Api\Generated\Build\Objects;

readonly class AccountUserSettingsInterests
{
    /**
     * @param mixed $activities
     * @param mixed $interests
     * @param mixed $music
     * @param mixed $tv
     * @param mixed $movies
     * @param mixed $books
     * @param mixed $games
     * @param mixed $quotes
     * @param mixed $about
     */
    public function __construct(
        public mixed $activities = NULL,
        public mixed $interests = NULL,
        public mixed $music = NULL,
        public mixed $tv = NULL,
        public mixed $movies = NULL,
        public mixed $books = NULL,
        public mixed $games = NULL,
        public mixed $quotes = NULL,
        public mixed $about = NULL
    ) {}
}