<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\TwitterService;
use Illuminate\Http\Request;

class ApiXController extends Controller
{
    protected $twitterService;

    public function __construct(TwitterService $twitterService)
    {
        $this->twitterService = $twitterService;
    }

    public function showTweets(Request $request)
    {
        $username = 'Pablo98d'; // Obtén el username de la solicitud
        $tweets = $this->twitterService->getTweets($username);

        dd($tweets);

        return view('tweets.index', compact('tweets')); // Asegúrate de crear esta vista
    }
}
