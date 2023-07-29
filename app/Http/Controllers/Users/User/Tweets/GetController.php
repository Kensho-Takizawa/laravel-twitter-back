<?php

namespace App\Http\Controllers\Users\User\Tweets;

use App\Http\Controllers\Controller;
use App\Http\Resources\TweetResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Koriym\HttpConstants\StatusCode;

class GetController extends Controller
{
    public function __invoke(User $user): JsonResponse
    {
        return TweetResource::collection($user->tweets)
            ->response()
            ->setStatusCode(StatusCode::OK);
    }
}
