// app/Services/TwitterService.php
<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class TwitterService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.twitter.com/',
        ]);
    }

    public function getUserId($username)
    {
        try {
            $response = $this->client->request('GET', '2/users/by/username/' . $username, [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('TWITTER_BEARER_TOKEN'),
                ],
            ]);

            dd($response);

            return json_decode($response->getBody()->getContents(), true)['data']['id'];
        } catch (RequestException $e) {
            return [
                'error' => $e->getMessage(),
            ];
        }
    }

    public function getTweets($userId)
    {
        try {
            $response = $this->client->request('GET', "2/users/$userId/tweets", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('TWITTER_BEARER_TOKEN'),
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            return [
                'error' => $e->getMessage(),
            ];
        }
    }
}
