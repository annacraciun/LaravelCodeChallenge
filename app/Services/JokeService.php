<?php

namespace App\Services;

use GuzzleHttp\Client;

class JokeService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function fetchJokes()
    {
        $apiUrl = env('JOKE_API_URL');
        $response = $this->client->get($apiUrl);
        $jokes = json_decode($response->getBody()->getContents());

        return $jokes ? array_slice($jokes, 0, 3) : [];
    }
}
