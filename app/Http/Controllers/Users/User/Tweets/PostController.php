<?php

namespace App\Http\Controllers\Users\User\Tweets;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\Tweets\PostRequest;
use App\Http\Resources\TweetResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Koriym\HttpConstants\StatusCode;

class PostController extends Controller
{
    public function __invoke(PostRequest $request, User $user): JsonResponse
    {
        $tweet = $user->tweets()->create([
            'content' => $request->input('content')
        ]);

        return TweetResource::make($tweet)
            ->response()
            ->setStatusCode(StatusCode::CREATED);
    }
}
